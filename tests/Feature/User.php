<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class User extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testViewItemAsUser()
    {
        //$user = factory(User::class)->create();

        $response = $this->actingAs(User::find(1))
                         ->get('/viewitem');
        $response->assertStatus(200);    
    }

    public function testAccountUserView(){
        $response = $this->actingAs(User::find(1))
                        ->get('/account');
        $response->assertStatus(200);
    }



}
