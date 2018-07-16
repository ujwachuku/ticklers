<?php

Route::get('/', 'PageController@index')->name('home.index');
Route::get('about', 'PageController@about')->name('about');
Route::get('contact', 'PageController@contact')->name('contact');
Route::get('meals', 'MealController@index')->name('shop.index');
Route::get('meals/{meal}', 'MealController@show')->name('shop.meal');

Route::get('{category}/meals', 'MealController@mealsByCategory')->name('shop.meal.category');

Route::get('cart', 'CartController@index')->name('shop.cart');
Route::post('cart', 'CartController@store')->name('shop.cart.store');
Route::post('cart/empty', 'CartController@destroy')->name('shop.cart.destroy');

Route::post('order/store', 'OrderController@store')->name('order.store');

Route::get('thank-you', 'PageController@thanks')->name('shop.thanks');

Route::get('news', 'PostController@index')->name('posts.index');
// Route::get('news/post', 'posts.post');
// Auth::routes();

