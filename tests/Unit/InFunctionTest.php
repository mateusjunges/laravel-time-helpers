<?php

namespace Junges\TimeHelpers\Tests\Unit;

use Carbon\Carbon;
use Junges\TimeHelpers\Tests\TestCase;

class InFunctionTest extends TestCase
{
    public function test_it_returns_a_time_in_the_future()
    {
        $time = in(10)->minutes();

        $this->assertTrue($time->greaterThan(now()));
    }

    public function test_it_returs_a_carbon_instance()
    {
        $this->assertInstanceOf(Carbon::class, in(10)->minutes());
    }
}