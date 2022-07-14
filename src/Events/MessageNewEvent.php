<?php
/*
* File:     MessageNewEvent.php
* Category: Event
* Author:   M. Goldenbaum
* Created:  25.11.20 22:21
* Updated:  -
*
* Description:
*  -
*/

namespace Grkztd\PHPIMAP\Events;

use Grkztd\PHPIMAP\Message;

/**
 * Class MessageNewEvent
 *
 * @package Grkztd\PHPIMAP\Events
 */
class MessageNewEvent extends Event {

    /** @var Message $message */
    public $message;

    /**
     * Create a new event instance.
     * @var Message[] $messages
     * @return void
     */
    public function __construct($messages) {
        $this->message = $messages[0];
    }
}
