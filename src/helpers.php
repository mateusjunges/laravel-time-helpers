<?php

use Junges\TimeHelpers\TimeHelper;

if (!function_exists('in')) {
    /**
     * @param int $time
     * @param string $timezone
     * @return TimeHelper
     * @throws \Junges\TimeHelpers\Exceptions\InvalidTimeOperationMethodException
     */
    function in(int $time, string $timezone)
    {
        return (new TimeHelper('add', $timezone))->new($time);
    }
}

if (! function_exists('past')) {
    /**
     * @param int $time
     * @param string $timezone
     * @return TimeHelper
     * @throws \Junges\TimeHelpers\Exceptions\InvalidTimeOperationMethodException
     */
    function past(int $time, string $timezone)
    {
        return (new TimeHelper('sub', $timezone))->new($time);
    }
}