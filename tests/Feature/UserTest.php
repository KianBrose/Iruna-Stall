<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class User extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    public function testAdmin(){
        $user = factory('App\User'::class)->make();
        $response = $this->actingAs($user)->get('/blocker');
        $response->assertStatus(200);
    }
    public function testViewItemAsAuth(){
        $user = factory('App\User'::class)->make();
        $response = $this->actingAs($user)->get('/viewitem');
        $response->assertStatus(200);
    }

    public function testViewBlockerAsUser(){
        $user = factory('App\User'::class)->make([
            'isAdmin' => '0'
        ]);
        $response = $this->actingAs($user)->get('/blocker');
        if($response->assertStatus(404) || $response->assertStatus(302)){
            return true;
        }
    }


}
