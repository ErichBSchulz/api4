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
  private $dispatcher;

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
   * Create a base example based off the logs.
   */
  private function baseExample() {
    return array(
      'hook_calls' => $this->hook_calls,
      'events' => $this->subscriber->getEventLog(),
    );
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

  /**
   * Set up logging
   */
  public function setUpLogs() {
    // set up listener for hooks:
    $this->hookClass->setMock($this);
    // set up listener for events:
    $kernel = \Civi::service('civi_api_kernel');
    $this->dispatcher = $kernel->getDispatcher();
    $this->subscriber = new MockSubscriber();
    $this->dispatcher->addSubscriber($this->subscriber);
  }

  /**
   * Reset the hook and event logs.
   */
  public function resetLogs() {
    $this->resetHookLog();
    $this->subscriber->resetEventLog();
  }

  public function testConformance() {
    $this->setUpLogs();
    // set the varialbe with:
    //     `export CIVICRM_API4_DOC_PATH=$(pwd)/autodocs`
    $doc_path = getenv('CIVICRM_API4_DOC_PATH');
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
      echo '$entity_class: '.json_encode($entity_class,JSON_PRETTY_PRINT)."\n";
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
        $this->resetLogs();
        $create_result = $entity_class::create()
          ->setValues($dummy)
          ->setCheckPermissions(FALSE)
          ->execute();
        $this->assertArrayHasKey('id', $create_result, "create missing ID");
        $id = $create_result['id'];
        $expected_hook_calls = array(
          'pre' => 1,
          'post' => 1,
          'apiWrappers' => 1,
        //  'permission_check' => 1,
        );
        $this->assertHooksCalled($entity, 'Create', $expected_hook_calls);
        $this->assertGreaterThanOrEqual(1, $id, "$entity ID not positive");
        if ($doc_path) {
          $examples["$entity.create"] = array(
            'params' => array('Values' => $dummy),
            'result' => $create_result)
            + $this->baseExample();
        }
        // retrieve (get)
        $this->resetLogs();
        $clause = array('id', '=', $id);
        $get_result = $entity_class::get()
          ->setCheckPermissions(FALSE)
          ->addClause($clause)
          ->execute();
        $expected_hook_calls = array(
          'apiWrappers' => 2,
        );
        $this->assertHooksCalled($entity, 'Get', $expected_hook_calls);
        $this->assertEquals(1, count($get_result),
          "failed to get single fresh $entity");
        if ($doc_path) {
          $examples["$entity.get"] = array(
            'params' => array('Clause' => $clause),
            'result' => $get_result)
            + $this->baseExample();
        }
        // update

        // delete
        $this->resetLogs();
        $clause = array('id', '=', $id);
        $delete_result = $entity_class::delete()
          ->setCheckPermissions(FALSE)
          ->addClause($clause)
          ->execute();
        if ($doc_path) {
          $examples["$entity.delete"] = array(
            'params' => array('Clause' => $clause),
            'result' => $delete_result)
            + $this->baseExample();
        }
        $expected_hook_calls = array(
          'apiWrappers' => 2,
        );
        $this->assertHooksCalled($entity, 'Get', $expected_hook_calls);
        // should get back an array of deleted id:
        $this->assertEquals(array($id), (array) $delete_result,
          "unexpected delete result from $entity");
        $post_delete_result = $entity_class::get()
          ->setCheckPermissions(FALSE)
          ->addClause($clause)
          ->execute();
        $this->assertEquals(0, count($post_delete_result),
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
