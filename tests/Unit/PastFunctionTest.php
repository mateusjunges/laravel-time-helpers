<?php

namespace Junges\TimeHelpers\Tests\Unit;

use Carbon\Carbon;
use Junges\TimeHelpers\Tests\TestCase;

class PastFunctionTest extends TestCase
{
    public function test_minutes_returns_a_time_in_the_past()
    {
        $time = past(10)->minutes();

        $this->assertTrue($time->lessThan(now()));
    }

    public function test_hours_returns_a_time_in_the_past()
    {
        $time = past(10)->hours();

        $this->assertTrue($time->lessThan(now()));
    }

    public function test_days_returns_a_time_in_the_past()
    {
        $time = past(10)->days();

        $this->assertTrue($time->lessThan(now()));
    }

    public function test_weeks_returns_a_time_in_the_past()
    {
        $time = past(10)->weeks();

        $this->assertTrue($time->lessThan(now()));
    }

    public function test_weekdays_returns_a_time_in_the_past()
    {
        $time = past(10)->weekDays();

        $this->assertTrue($time->lessThan(now()));
    }

    public function test_months_returns_a_time_in_the_past()
    {
        $time = past(1)->months();

        $this->assertTrue($time->lessThan(now()));
    }

    public function test_years_returns_a_time_in_the_past()
    {
        $time = past(10)->years();

        $this->assertTrue($time->lessThan(now()));
    }

    public function test_centuries_returns_a_time_in_the_past()
    {
        $time = past(10)->centuries();

        $this->assertTrue($time->lessThan(now()));
    }

    public function test_it_returns_a_carbon_instance()
    {
        $this->assertInstanceOf(Carbon::class, past(10)->minutes());
    }
}
