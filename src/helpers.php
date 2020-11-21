<?php

if (!function_exists('in')) {
    function in(int $time)
    {
        return (new \App\CarbonHelpers())->new($time);
    }
}

if (!function_exists('after')) {
    function after(int $time)
    {
        return (new \App\CarbonHelpers())->new($time);
    }
}
