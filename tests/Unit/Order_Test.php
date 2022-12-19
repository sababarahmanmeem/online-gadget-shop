<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Order;

class Order_Test extends TestCase
{
    use RefreshDatabase;
    public function test_admin_can_see_all_orders()
    {
        $admin = User::factory()->create(['role_as'=>1]);

        //$orders = Order::factory()->create(['o_status'=>'0']);

        $response = $this->actingAs($admin)->get('/orders');
        $response->assertStatus(200);

        $response->assertRedirect('/edit-category/{id}');

    }

    public function test_admin_can_see_order_history()
    {
        $admin = User::factory()->create(['role_as'=>1]);

        //$orders = Order::factory()->create(['o_status'=>'0']);

        $response = $this->actingAs($admin)->get('order-history');
        $response->assertStatus(200);
        $response->assertRedirect('/order-history');


    }

}
