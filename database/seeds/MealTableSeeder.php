<?php

use App\Meal;
use Illuminate\Database\Seeder;

class MealTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Meal::create([
        	'meal_name' => 'Burgers',
        	'slug' => 'burgers',
        	'meal_description' => 'Lorem ipsum set amet',
        	'price' => 10.00,
        	'meal_category_id' => 2,
        	'is_published' => true,
        	'meal_image' => '',
        	'user_id' => 1
        ]);

        Meal::create([
        	'meal_name' => 'Nigerian',
        	'slug' => 'nigerian',
        	'meal_description' => 'Lorem ipsum set amet',
        	'price' => 10.00,
        	'meal_category_id' => 2,
        	'is_published' => true,
        	'meal_image' => '',
        	'user_id' => 1
        ]);

        Meal::create([
        	'meal_name' => 'Pizza',
        	'slug' => 'pizza',
        	'meal_description' => 'Lorem ipsum set amet',
        	'price' => 10.00,
        	'meal_category_id' => 2,
        	'is_published' => true,
        	'meal_image' => '',
        	'user_id' => 1
        ]);

        Meal::create([
        	'meal_name' => 'Chinese',
        	'slug' => 'chinese',
        	'meal_description' => 'Lorem ipsum set amet',
        	'price' => 10.00,
        	'meal_category_id' => 2,
        	'is_published' => true,
        	'meal_image' => '',
        	'user_id' => 1
        ]);

        Meal::create([
        	'meal_name' => 'Burgers 2',
        	'slug' => 'burgers-2',
        	'meal_description' => 'Lorem ipsum set amet',
        	'price' => 10.00,
        	'meal_category_id' => 2,
        	'is_published' => true,
        	'meal_image' => '',
        	'user_id' => 1
        ]);

        Meal::create([
        	'meal_name' => 'Nigerian 2',
        	'slug' => 'nigerian-2',
        	'meal_description' => 'Lorem ipsum set amet',
        	'price' => 10.00,
        	'meal_category_id' => 2,
        	'is_published' => true,
        	'meal_image' => '',
        	'user_id' => 1
        ]);

        Meal::create([
        	'meal_name' => 'Pizza 2',
        	'slug' => 'pizza-2',
        	'meal_description' => 'Lorem ipsum set amet',
        	'price' => 10.00,
        	'meal_category_id' => 2,
        	'is_published' => true,
        	'meal_image' => '',
        	'user_id' => 1
        ]);

        Meal::create([
        	'meal_name' => 'Chinese 2',
        	'slug' => 'chinese-2',
        	'meal_description' => 'Lorem ipsum set amet',
        	'price' => 10.00,
        	'meal_category_id' => 2,
        	'is_published' => true,
        	'meal_image' => '',
        	'user_id' => 1
        ]);

        Meal::create([
        	'meal_name' => 'Burgers 3',
        	'slug' => 'burgers-3',
        	'meal_description' => 'Lorem ipsum set amet',
        	'price' => 10.00,
        	'meal_category_id' => 2,
        	'is_published' => true,
        	'meal_image' => '',
        	'user_id' => 1
        ]);

        Meal::create([
        	'meal_name' => 'Nigerian 3',
        	'slug' => 'nigerian-3',
        	'meal_description' => 'Lorem ipsum set amet',
        	'price' => 10.00,
        	'meal_category_id' => 2,
        	'is_published' => true,
        	'meal_image' => '',
        	'user_id' => 1
        ]);

        Meal::create([
        	'meal_name' => 'Pizza 3',
        	'slug' => 'pizza-3',
        	'meal_description' => 'Lorem ipsum set amet',
        	'price' => 10.00,
        	'meal_category_id' => 2,
        	'is_published' => true,
        	'meal_image' => '',
        	'user_id' => 1
        ]);

        Meal::create([
        	'meal_name' => 'Chinese 4',
        	'slug' => 'chinese-4',
        	'meal_description' => 'Lorem ipsum set amet',
        	'price' => 10.00,
        	'meal_category_id' => 2,
        	'is_published' => true,
        	'meal_image' => '',
        	'user_id' => 1
        ]);
    }
}
