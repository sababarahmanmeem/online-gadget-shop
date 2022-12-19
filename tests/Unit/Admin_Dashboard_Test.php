<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Admin_Dashboard_Test extends TestCase
{
    use RefreshDatabase;
    public function test_admin_can_see_the_registred_users()
    {

        $admin = User::factory()->create(['role_as'=> 1]);
        $response = $this->actingAs($admin)->get('/users');

        $response->assertStatus(200);
        $response->assertRedirect('/home');

    }


}
