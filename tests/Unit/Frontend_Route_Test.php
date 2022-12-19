<?php

namespace Tests\Unit;

use Tests\TestCase;

class Frontend_Route_Test extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_frontend_routes_are_working_fine()
    {

        $response = $this->get('cart');
        $response->assertStatus(302);

        $response = $this->get('checkout');
        $response->assertStatus(302);

        $response = $this->get('my-orders');
        $response->assertStatus(302);

        $response = $this->get('view-order/{id}');
        $response->assertStatus(302);

        $response = $this->get('wishlist');
        $response->assertStatus(302);

        $response = $this->post('procced-to-pay');
        $response->assertStatus(302);

        $response = $this->post('add-rating');
        $response->assertStatus(302);

        $response = $this->get('add-review/{product_url}/userreview');
        $response->assertStatus(302);
        $response = $this->get('edit-review/{product_url}/userreview');
        $response->assertStatus(302);

        $response = $this->post('add-review');
        $response->assertStatus(302);

        $response = $this->put('update-review');
        $response->assertStatus(302);

    }
}


