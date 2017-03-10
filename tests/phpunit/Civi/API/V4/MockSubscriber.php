<?php
namespace Civi\API\V4;

/**
 * Class to enable unit tests to monitor events
 *   tests/phpunit/CiviTest/CiviUnitTestCase.php
 */
class MockSubscriber
  implements \Symfony\Component\EventDispatcher\EventSubscriberInterface {

  private $events = array();

  /**
   * Reset the events log.
   */
  public function resetEventLog() {
    $this->events = array();
  }

  /**
   * Fetches the events log.
   */
  public function getEventLog() {
    return $this->events;
  }

  /**
   * Snoop on events.
   */
  public function snoop($event) {
    $this->events[] = $event;
  }

  /**
   */
  public static function getSubscribedEvents() {
    $events = array_fill_keys(\Civi\API\Events::allEvents(), 'snoop');
    return $events;
  }
}
