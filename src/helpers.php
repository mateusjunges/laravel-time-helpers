<?php

use Junges\TimeHelpers\TimeHelpers;

if (!function_exists('in')) {
    function in(int $time)
    {
        return (new TimeHelpers())->new($time);
    }
}

if (!function_exists('after')) {
    function after(int $time)
    {
        return (new TimeHelpers())->new($time);
    }
}
