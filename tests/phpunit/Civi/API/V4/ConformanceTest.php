<?php
namespace Civi\API\V4;
// fixme - what am I doing wrong to need this line?
require_once 'UnitTestCase.php';
require_once 'MockSubscriber.php';
require_once 'Documenter.php';
use Civi\Api4\Participant;
use Civi\Api4\Contact;
use Civi\Test\HeadlessInterface;
use Civi\Test\TransactionalInterface;

/**
 * @group headless
 *
 * This uses some hook kernel set-up copied from
 *   tests/phpunit/CiviTest/CiviUnitTestCase.php
 */
class ConformanceTest extends UnitTestCase {

  private $hook_calls = array();

  /**
   * Set up baseline for testing
   */
  public function setUp() {
    parent::setUp();
    $this->hookClass = \CRM_Utils_Hook::singleton();
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   *
   * This method is called after a test is executed.
   */
  public function tearDown() {
    parent::tearDown();
    // \CRM_Utils_Hook::singleton()->reset(); << -- is this actually needed
    $this->hookClass->reset();
  }

  /**
   * Temporary bodge to help with debugging
   * @param string $string to report
   */
  protected function report($string) {
    echo $string . "\n";
  }

  /**
   * Temporary bodge to help with debugging
   * @param string $entity
   * @param string $action
   * @param array $calls to hooks since last reset
   */
  protected function reportHookCalls($entity, $action, $calls) {
    $this->report("### $entity.$action hook calls: \n"
      . json_encode($calls, JSON_PRETTY_PRINT));
  }

  /**
   * Temporary bodge to help with debugging
   * @param MockSubscriber $subscriber
   */
  protected function reportEvents($subscriber) {
    return;
    foreach ($subscriber->getEventLog() as $event) {
      echo '$event->getName(): '.json_encode($event->getName(),JSON_PRETTY_PRINT)."\n";
      $request = $event->getApiRequest();
      echo '$request: '.json_encode($request,JSON_PRETTY_PRINT)."\n";
      $params = $request->getParams();
      echo '$apiRequest methods: '
        .json_encode(get_class_methods($event->getApiRequest()),JSON_PRETTY_PRINT)."\n";
      echo '$params: '.json_encode($params,JSON_PRETTY_PRINT)."\n";
    }
  }

  /**
   * Check that a number of hook calls have taken place
   * @param array $calls to hooks since last reset
   */
  protected function assertHooksCalled($entity, $action, $call_assertions) {
    foreach ($call_assertions as $hook => $minimum) {
      $this->assertGreaterThanOrEqual($minimum,
        $this->hookCallCount("civicrm_$hook"),
        "$entity.$action did not evoke civicrm_$hook enough");
    }
  }

  /**
   * Reset the hook log
   */
  private function resetHookLog() {
    $this->hook_calls = array();
  }

  /**
   * Determine how many times a hook has been called since last reset.
   */
  private function hookCallCount($name) {
    return isset($this->hook_calls[$name])
      ? $this->hook_calls[$name]
      : 0;
  }

  /**
   * Provide a catch method to snoop on hook calls
   * @param string $name hook being invoked
   * @param array $arguments hook paramters
   */
  public function __call($name, $arguments) {
    $this->hook_calls[$name] = 1 + $this->hookCallCount($name);
  }

  public function testConformance() {
    // set the varialbe with:
    //     `export CIVICRM_API4_DOC_PATH=$(pwd)/autodocs`
    $doc_path = getenv('CIVICRM_API4_DOC_PATH');
    // set up listener for hooks:
    $this->hookClass->setMock($this);
    // set up listener for events:
    $kernel = \Civi::service('civi_api_kernel');
    $dispatcher = $kernel->getDispatcher();
    $subscriber = new MockSubscriber();
    $dispatcher->addSubscriber($subscriber);
    // a list of specific examples
    $examples = array();
    // get list of all the entities we know about and loop over them:
    $entities = Entity::get()
      ->setCheckPermissions(FALSE)
      ->execute();
    $blob = array('entity' => array());
    foreach ($entities as $entity) {
      $entity_blob = array('core_action' => array());
      $entity_class = 'Civi\Api4\\' . $entity;
      $this->report("## Testing $entity");
      $actions = $entity_class::getActions()
        ->setCheckPermissions(FALSE)
        ->execute()
        ->indexBy('name');
      $entity_blob['action'] = $actions;
      if ($entity != 'Entity') {
        // fields
        $fields = $entity_class::getFields()
          ->setCheckPermissions(FALSE)
          ->execute()
          ->indexBy('name');
        $entity_blob['fields'] = $fields;
        $this->assertArraySubset(
          array('type' => 1, 'required' => TRUE),
          $fields['id'],
          "$entity fields missing required ID field of proper type");
        $this->assertArraySubset(
          array('type' => 1, 'required' => TRUE),
          $fields['id'],
          "$entity fields missing required ID field of proper type");
        // create
        $dummy = $this->sample(array('type' => $entity))['sample_params'];
        $this->resetHookLog();
        $subscriber->resetEventLog();
        $create_result = $entity_class::create()
          ->setValues($dummy)
          ->setCheckPermissions(FALSE)
          ->execute();
        $this->assertArrayHasKey('id', $create_result, "create missing ID");
        $id = $create_result['id'];
        $hook_calls = array(
          'pre' => 1,
          'post' => 1,
          'apiWrappers' => 1,
        //  'permission_check' => 1,
        );
        $this->assertHooksCalled($entity, 'Create', $hook_calls);
        $this->assertGreaterThanOrEqual(1, $id, "$entity ID not positive");
        $this->reportHookCalls($entity, 'Create', $this->hook_calls);
        $this->reportEvents($subscriber);
        $examples["$entity.create"] = array(
          'params' => array('Values' => $dummy),
          'result' => $create_result,
          'hook_calls' => $hook_calls,
          'events' => $subscriber->getEventLog(),
        );
        // retrieve
        $this->resetHookLog();
        $get_result = $entity_class::get()
          ->setCheckPermissions(FALSE)
          ->addClause(array('id', '=', $id))
          ->execute();
        $hook_calls = array(
          'apiWrappers' => 2,
        );
        $this->assertHooksCalled($entity, 'Get', $hook_calls);
        $this->reportHookCalls($entity, 'Get', $this->hook_calls);
        $this->report("Hook calls: \n" . json_encode($this->hook_calls, JSON_PRETTY_PRINT));
        $this->assertEquals(1, count($get_result),
          "failed to get single fresh $entity");
        // update

        // delete
        $this->resetHookLog();
        $delete_result = $entity_class::delete()
          ->setCheckPermissions(FALSE)
          ->addClause(array('id', '=', $id))
          ->execute();
        $hook_calls = array(
          'apiWrappers' => 2,
        );
        $this->assertHooksCalled($entity, 'Get', $hook_calls);
        $this->reportHookCalls($entity, 'Delete', $this->hook_calls);
        // should get back an array of deleted id:
        $this->assertEquals(array($id), (array) $delete_result,
          "unexpected delete result from $entity");
        $get_deleted_result = $entity_class::get()
          ->setCheckPermissions(FALSE)
          ->addClause(array('id', '=', $id))
          ->execute();
        $this->assertEquals(0, count($get_deleted_result),
          "still getting back data after delete of $entity");
      }
      $blob['entity'][$entity] = $entity_blob;
    }
    if ($doc_path) {
      $blob['examples'] = $examples;
      $documenter = new Documenter($doc_path);
      $documenter->blobToMarkDown($blob);
    }
  }

}
