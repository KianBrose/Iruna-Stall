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
    
    public function testAdmin(){
        $user = factory('App\User'::class)->make([
            'isAdmin' => '1'
        ]);
        $response = $this->actingAs($user)->get('/admin');
        $response->assertStatus(200);
    }
    public function testViewItemAsAuth(){
        $user = factory('App\User'::class)->make();
        $response = $this->actingAs($user)->get('/viewitem');
        $response->assertStatus(200);
    }

    public function testAsNoneAdmin(){
        $user = factory('App\User'::class)->make([
            'isAdmin' => '0'
        ]);
        $response = $this->actingAs($user)->get('/admin');
        if($response->assertStatus(404) || $response->assertStatus(302)){
            return true;
        }
    }


}
