<?php

namespace Ridrog\Dummy\Test\Examples;

use Ridrog\Dummy\Test\TestCase;

class HttpTest extends TestCase
{
    /**
     * Setup
     */
    public function setUp()
    {
        parent::setUp();

    }

    /** @test */
    public function the_test_route_returns_a_good_status_code()
    {
        $response = $this->get(route('dummy-string-route'));

        $response->assertStatus(200);
    }

    /** @test */
    public function the_test_route_returns_a_string()
    {
        $response = $this->get(route('dummy-string-route'));

        $response->assertSee('The Routes are loaded');
    }

    /** @test */
    public function the_controller_works()
    {
        $response = $this->get(route('dummy-controller-route'));

        $response->assertStatus(200);
    }

    /** @test */
    public function the_controller_returns_a_string()
    {
        $response = $this->get(route('dummy-controller-route'));

        $response->assertSee('The Controller worked');
    }

    /** @test */
    public function the_view_works()
    {
        $response = $this->get(route('dummy-view-route'));

        $response->assertStatus(200);
    }

    /** @test */
    public function the_route_returns_a_view()
    {
        $response = $this->get(route('dummy-view-route'));

        $response->assertSee("<h1>Hello Dummy</h1>");
    }

    /** @test */
    public function the_translation_works()
    {
        $response = $this->get(route('dummy-translation-route'));

        $response->assertStatus(200);
    }

    /** @test */
    public function the_translation_route_returns_a_string()
    {
        $response = $this->get(route('dummy-translation-route'));

        $response->assertSee('Hello World');
    }

    /** @test */
    public function the_german_translation_returns_a_string()
    {
        $this->app->setLocale('de');

        $response = $this->get(route('dummy-translation-route'));

        $response->assertSee('Hallo Welt');
    }
}