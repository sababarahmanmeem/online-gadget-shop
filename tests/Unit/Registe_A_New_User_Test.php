<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Registe_A_New_User_Test extends TestCase
{
    use RefreshDatabase;
    public function test_new_users_store()
    {

        User::factory()->create([
            'name'=>'Davido',
            'email'=>'daviod@gmail.com',
            'password'=>'sa21356711',

        ]);

        $response = $this->post('/register',[
            'name'=>'Davido',
            'email'=>'daviod@gmail.com',
            'password'=>'sa21356711',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/home');
    }


}
