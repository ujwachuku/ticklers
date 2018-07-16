<?php

use App\Models\Post;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
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
        	Post::create([
	        	'post_name' => 'Lorem ipsum dolor sit amet'.$count,
	        	'slug' => 'lorem-ipsum-'.$count,
	        	'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus minus, suscipit modi, est impedit molestiae eaque veritatis corporis alias laudantium! Accusantium eligendi autem consequatur soluta reiciendis sunt et, facere accusamus.',
	        	'post_image' => '',
	        	'post_category_id' => $count,
	        	'is_featured' => false,
	        	'is_published' => true,
	        	'user_id' => 2
	        ]);
        }        
    }
}
