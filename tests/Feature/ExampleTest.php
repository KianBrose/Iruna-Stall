<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class RoutesStatus extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAbout(){
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    public function testviewitem(){
        $response = $this->get('/viewitem');
        $response->assertStatus(302);
    }
}
