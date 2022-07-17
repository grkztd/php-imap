<?php

namespace Grkztd\PHPIMAP\Events;


abstract class Event {

    /**
     * Dispatch the event with the given arguments.
     */
    public static function dispatch() {
        return new static(func_get_args());
    }
}
