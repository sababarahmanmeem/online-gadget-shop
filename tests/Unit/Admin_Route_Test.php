<?php

namespace Tests\Unit;

use Tests\TestCase;

class Admin_Route_Test extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_admin_routes_are_working_fine()
    {
        $response = $this->get('categories');
        $response->assertStatus(302);
        $response = $this->get('add-category');
        $response->assertStatus(302);
        $response = $this->post('insert-category');
        $response->assertStatus(302);
        $response = $this->get('edit-category/{id}');
        $response->assertStatus(302);
        $response = $this->put('update-category/{id}');
        $response->assertStatus(302);
        $response = $this->get('delete-category/{id}');
        $response->assertStatus(302);


        $response = $this->get('products');
        $response->assertStatus(302);
        $response = $this->get('add-products');
        $response->assertStatus(302);
        $response = $this->post('insert-product');
        $response->assertStatus(302);
        $response = $this->get('edit-product/{id}');
        $response->assertStatus(302);
        $response = $this->put('update-product/{id}');
        $response->assertStatus(302);
        $response = $this->get('delete-product/{id}');
        $response->assertStatus(302);


        $response = $this->get('orders');
        $response->assertStatus(302);
        $response = $this->get('orders/view-order/{id}');
        $response->assertStatus(302);
        $response = $this->put('update-order/{id}');
        $response->assertStatus(302);
        $response = $this->get('order-history');
        $response->assertStatus(302);

        $response = $this->get('users');
        $response->assertStatus(302);
        $response = $this->get('users/view-user/{id}');
        $response->assertStatus(302);


    }
}
