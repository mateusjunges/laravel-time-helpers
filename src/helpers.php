<?php

use Junges\TimeHelpers\TimeHelper;

if (!function_exists('in')) {
    function in(int $time)
    {
        return (new TimeHelper())->new($time);
    }
}