<?php

namespace Ridrog\Dummy\Test\Examples;

use Ridrog\Dummy\Test\TestCase;
use Illuminate\Support\ServiceProvider;
use Ridrog\Dummy\DummyServiceProvider;

class ServiceProviderTest extends TestCase
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
    public function it_can_be_instantiated()
    {
        $expectations = [
             \Illuminate\Support\ServiceProvider::class,
             DummyServiceProvider::class
        ];

        foreach ($expectations as $expected) {
            $this->assertInstanceOf($expected, $this->provider);
        }
    }

}