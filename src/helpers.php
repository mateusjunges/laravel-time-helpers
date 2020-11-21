<?php

use Junges\TimeHelpers\TimeHelper;

if (!function_exists('in')) {
    /**
     * @param int    $time
     * @param string $timezone
     *
     * @throws \Junges\TimeHelpers\Exceptions\InvalidTimeOperationMethodException
     *
     * @return TimeHelper
     */
    function in(int $time, string $timezone = null)
    {
        return (new TimeHelper('add', $timezone))->new($time);
    }
}

if (!function_exists('past')) {
    /**
     * @param int    $time
     * @param string $timezone
     *
     * @throws \Junges\TimeHelpers\Exceptions\InvalidTimeOperationMethodException
     *
     * @return TimeHelper
     */
    function past(int $time, string $timezone = null)
    {
        return (new TimeHelper('sub', $timezone))->new($time);
    }
}
