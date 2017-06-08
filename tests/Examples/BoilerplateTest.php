<?php

namespace Ridrog\Dummy\Test\Examples;

use Ridrog\Dummy\Dummy;
use Ridrog\Dummy\Test\TestCase;
use Illuminate\Support\ServiceProvider;
use Ridrog\Dummy\DummyServiceProvider;

class DummyTest extends TestCase
{

    /**
     *
     * @var DummyServiceProvider
     */
    private $provider;

    /**
     * Setup
     */
    public function setUp()
    {
        parent::setUp();

        $this->provider = $this->app->getProvider(DummyServiceProvider::class);

    }

    /**
     * Tear Down
     */
    public function tearDown()
    {
        unset($this->provider);

        parent::tearDown();
    }

    /** @test */
    public function it_returns_hello()
    {
        $dummy = new Dummy();

        $this->assertTrue($dummy->hello() === "hello");
    }

}