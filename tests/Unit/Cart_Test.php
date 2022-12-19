<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Order;

class Cart_Test extends TestCase
{
    use RefreshDatabase;
    public function test_user_can_add_item_to_cart()
    {
        $user = User::factory()->create(['role_as'=>0]);

        $response = $this->actingAs($user)->post('/add-to-cart',[
            'product_id'=>'2',
            'product_qty'=>2,
            'product_rent_days'=>3
        ]);
        $response->assertStatus(200);
        $response->assertResponse(json(['status' => $product_check->name . " added To cart"]));
    }

    public function test_user_can_view_items_of_cart()
    {
        $user = User::factory()->create(['role_as'=>0]);

        $response = $this->actingAs($user)->get('/cart');

        $response->assertStatus(200);


    }


    public function test_user_can_delete_items_from_cart()
    {
        $user = User::factory()->create(['role_as'=>0]);

        $response = $this->actingAs($user)->post('/delete-cart-item');

        $response->assertStatus(200);
        $response->assertResponse(json(['status' => "Deleted Item from Cart Successfully"]));

    }

}
