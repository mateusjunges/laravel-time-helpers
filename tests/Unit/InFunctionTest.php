<?php

namespace Junges\TimeHelpers\Tests\Unit;

use Carbon\Carbon;
use Junges\TimeHelpers\Tests\TestCase;

class InFunctionTest extends TestCase
{
    public function test_seconds_returns_a_time_in_the_future()
    {
        $time = in(10)->seconds();

        $this->assertTrue($time->greaterThan(now()));
    }

    public function test_minutes_returns_a_time_in_the_future()
    {
        $time = in(10)->minutes();

        $this->assertTrue($time->greaterThan(now()));
    }

    public function test_hours_returns_a_time_in_the_future()
    {
        $time = in(10)->hours();

        $this->assertTrue($time->greaterThan(now()));
    }

    public function test_days_returns_a_time_in_the_future()
    {
        $time = in(10)->days();

        $this->assertTrue($time->greaterThan(now()));
    }

    public function test_weeks_returns_a_time_in_the_future()
    {
        $time = in(10)->weeks();

        $this->assertTrue($time->greaterThan(now()));
    }

    public function test_weekdays_returns_a_time_in_the_future()
    {
        $time = in(10)->weekDays();

        $this->assertTrue($time->greaterThan(now()));
    }

    public function test_months_returns_a_time_in_the_future()
    {
        $time = in(1)->months();

        $this->assertTrue($time->greaterThan(now()));
    }

    public function test_years_returns_a_time_in_the_future()
    {
        $time = in(10)->years();

        $this->assertTrue($time->greaterThan(now()));
    }

    public function test_centuries_returns_a_time_in_the_future()
    {
        $time = in(10)->centuries();

        $this->assertTrue($time->greaterThan(now()));
    }

    public function test_it_returs_a_carbon_instance()
    {
        $this->assertInstanceOf(Carbon::class, in(10)->minutes());
    }
}
