<?php

namespace Junges\TimeHelpers\Tests;

use Junges\TimeHelpers\Providers\TimeHelperServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        (new TimeHelperServiceProvider($this->app))->boot();
    }

    public function getPackageProviders($app)
    {
        return [
            TimeHelperServiceProvider::class
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('app.timezone', 'UTC');
    }
}