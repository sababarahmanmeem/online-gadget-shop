<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Login_A_New_User_Test extends TestCase
{
    use RefreshDatabase;
    public function test_login_redirect_to_dashboard()
    {

        User::factory()->create([
            'email'=>'daviod@gmail.com',
            'password'=>bcrypt('sa21356711')

        ]);

        $response = $this->post('/login',[
            'email'=>'daviod@gmail.com',
            'password'=>bcrypt('sa21356711')
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/');
    }
}
