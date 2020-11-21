<?php

use Junges\TimeHelpers\TimeHelpers;

if (!function_exists('in')) {
    function in(int $time)
    {
        return (new TimeHelpers())->new($time);
    }
}