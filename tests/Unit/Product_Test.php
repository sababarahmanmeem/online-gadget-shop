<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Product;

class Product_Test extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_inserting_a_new_product()
    {
        $response = $this->post('/insert-product',[

            'category_id'=>'2',
            'name'=>'Brush',
            'description'=>'brush neat',
            'small_description'=>'brush look',
            'custom_url'=>'brush',
            'original_price'=>'20',
            'tax'=>'1',
            'selling_price'=>'15',
            'product_image'=>'166345.jpg',
            'qty'=>'2',
            'status'=>'0',
            'popular'=>'1',
            'meta_title'=>'brush',
            'meta_description'=>'brush meta',
            'meta_keywords'=>'teeth brush',
        ]);
        $response->assertRedirect('/products');
    }

    public function test_index_view_of_inserting_a_new_product()
    {
        $response = $this->get('/add-products');
        $response->assertRedirect('/product/add');
    }

    public function test_index_view_of_editing_a_new_product()
    {
        $response = $this->get('/edit-product/{id}');
        $response->assertRedirect('/product/edit');
    }

    public function test_updating_a_product()
    {
        $response = $this->put('/update-product/{id}',[

            'category_id'=>'3',
            'name'=>'Brushh',
            'description'=>'brush neat',
            'small_description'=>'brush look',
            'custom_url'=>'brush',
            'original_price'=>'20',
            'tax'=>'1',
            'selling_price'=>'15',
            'product_image'=>'166345.jpg',
            'qty'=>'2',
            'status'=>'0',
            'popular'=>'1',
            'meta_title'=>'brusssh',
            'meta_description'=>'brush meta',
            'meta_keywords'=>'teeth brush',
        ]);
        $response->assertRedirect('/products');
    }

    public function test_deleting_a_product()
    {
        $response = $this->get('/delete-product/{id}');
        $response->assertRedirect('/products');

    }
}
