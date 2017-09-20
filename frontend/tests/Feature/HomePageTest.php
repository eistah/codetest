<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomePageTest extends TestCase
{
    /**
     * Test home page returns 200
     *
     * @return void
     */
    public function testHomePageIsSuccessfull()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Test home page returns main view
     *
     * @return void
     */
    public function testHomePageReturnsMainView()
    {
        $response = $this->get('/');

        $response->assertViewIs('main');
    }
}