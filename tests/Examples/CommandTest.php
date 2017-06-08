<?php

namespace Ridrog\Dummy\Test\Examples;

use Ridrog\Dummy\Test\TestCase;
use Illuminate\Support\Facades\Artisan;
use Ridrog\Dummy\DummyServiceProvider;

class CommandTest extends TestCase
{
    /**
     * Setup
     */
    public function setUp()
    {
        parent::setUp();
    }

    /** @test */
    public function it_can_run_the_dummy_test_command()
    {
        Artisan::call('dummy:test');

        // What to assert? Maybe nothing? Because it will fail if it can't run the command
        $this->assertTrue(true);
    }

}