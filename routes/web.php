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


Route::view('checkout', 'shop.checkout');
Route::view('thank-you', 'shop.thanks');
Route::view('news', 'posts.index');
Route::view('news/post', 'posts.post');
// Auth::routes();

