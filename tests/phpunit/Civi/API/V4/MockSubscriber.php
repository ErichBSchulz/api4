<?php
namespace Civi\API\V4;

/**
 * Class to enable unit tests to monitor events
 *   tests/phpunit/CiviTest/CiviUnitTestCase.php
 */
class MockSubscriber implements \Symfony\Component\EventDispatcher\EventSubscriberInterface {

  private $event = array();

  /**
   * Reset the event log
   */
  private function resetEventLog() {
    $this->event = array();
  }

  /**
   */
  public static function getSubscribedEvents() {
    return array();
  }
}
