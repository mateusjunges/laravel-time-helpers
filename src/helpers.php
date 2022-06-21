<?php

use Junges\TimeHelpers\TimeHelper;

if (!function_exists('in')) {
    /**
     * @param  int  $time
     * @param  string|null  $timezone
     *
     * @throws \Junges\TimeHelpers\Exceptions\InvalidTimeOperationMethodException
     * @return TimeHelper
     */
    function in(int $time, string $timezone = null)
    {
        return (new TimeHelper(TimeHelper::ADD_TIME, $timezone))->new($time);
    }
}

if (!function_exists('past')) {
    /**
     * @param  int  $time
     * @param  string|null  $timezone
     *
     * @throws \Junges\TimeHelpers\Exceptions\InvalidTimeOperationMethodException
     * @return TimeHelper
     */
    function past(int $time, string $timezone = null)
    {
        return (new TimeHelper(TimeHelper::SUB_TIME, $timezone))->new($time);
    }
}
