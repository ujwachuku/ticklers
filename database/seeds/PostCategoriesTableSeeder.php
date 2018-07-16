<?php

use App\Models\PostCategory;
use Illuminate\Database\Seeder;

class PostCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($count = 1; $count < 6; $count++) 
        {
        	PostCategory::create([
	        	'post_category_name' => 'Lorem ipsum dolor sit amet'.$count,
	        	'slug' => 'lorem-'.$count,
	        	'post_category_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi nostrum, facilis, aut atque vitae eligendi! Expedita voluptate dolorum sapiente perferendis at deleniti! Molestiae accusantium, ab cumque consectetur a assumenda incidunt.',
	        	'user_id' => 1
	        ]);        	
        }
        
    }
}
