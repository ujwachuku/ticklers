<?php

use App\MealCategory;
use Illuminate\Database\Seeder;

class MealCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MealCategory::create([
        	'meal_category_name' => 'Burgers',
        	'slug' => 'burgers',
        	'meal_category_description' => 'Lorem ipsum set amet',
        	'meal_category_image' => '',
        	'user_id' => 1
        ]);

        MealCategory::create([
        	'meal_category_name' => 'Nigerian',
        	'slug' => 'nigerian',
        	'meal_category_description' => 'Lorem ipsum set amet',
        	'meal_category_image' => '',
        	'user_id' => 1
        ]);

        MealCategory::create([
        	'meal_category_name' => 'Pizza',
        	'slug' => 'pizza',
        	'meal_category_description' => 'Lorem ipsum set amet',
        	'meal_category_image' => '',
        	'user_id' => 1
        ]);

        MealCategory::create([
        	'meal_category_name' => 'Chinese',
        	'slug' => 'chinese',
        	'meal_category_description' => 'Lorem ipsum set amet',
        	'meal_category_image' => '',
        	'user_id' => 1
        ]);
    }
}
