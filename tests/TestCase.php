<?php

namespace Ridrog\Dummy\Test;

use Ridrog\Dummy\DummyServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{

    /* ------------------------------------------------------------------------------------------------
     |  Bench Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function setUp()
    {
        parent::setUp();

        $this->app['config']->set('app.key', 'base64:5dTP2fhCib9UPEHrqWTgq6F/SvvaU93MUgn3UwcopAw=');
    }

    protected function getPackageProviders($app)
    {
        return [
            DummyServiceProvider::class,
        ];
    }
}