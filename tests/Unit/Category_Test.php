<?php

namespace Tests\Unit;

use Tests\TestCase;

class Category_Test extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_inserting_a_new_category()
    {
        $response = $this->post('/insert-category',[

            'name'=>'Sports',
            'description'=>'sports stuff',
            'custom_url'=>'sport stuffy',
            'status'=>'0',
            'is_popular'=>'1',
            'image'=>'14569.jpg',
            'meta_title'=>'sporting',
            'meta_description'=>'sports you need',
            'meta_keywords'=>'sport, tenning, carrom'
        ]);
        $response->assertRedirect('/dashboard');
    }

    public function test_index_view_of_inserting_a_new_category()
    {
        $response = $this->get('/add-category');

        $response->assertRedirect('/category/add/');
    }

    public function test_index_view_of_editing_a_category()
    {
        $response = $this->get('/edit-category/{id}');

        $response->assertRedirect('/category/edit/}');

    }

    public function test_updating_a_category()
    {
        $response = $this->put('/update-category/{id}',[

            'name'=>'Sporrts',
            'description'=>'sports stufff',
            'custom_url'=>'sport stufffy',
            'status'=>'0',
            'is_popular'=>'1',
            'image'=>'145659.jpg',
            'meta_title'=>'sporting',
            'meta_description'=>'sports stuff you need',
            'meta_keywords'=>'sport, tennis, carrom, balls'
        ]);
        $response->assertRedirect('/dashboard');
    }

    public function test_deleting_a_category()
    {
        $response = $this->get('/delete-category/{id}');
        $response->assertRedirect('/categories');

    }
}
