<?php

Route::view('/', 'home.index');
Route::view('/about', 'pages.about');
Route::view('/contact', 'pages.contact');
Route::view('/meals', 'shop.index');
Route::view('/meals/meal', 'shop.meal');
Route::view('/cart', 'shop.cart');
Route::view('/checkout', 'shop.checkout');
Route::view('/thank-you', 'shop.thanks');
Route::view('/news', 'posts.index');
Route::view('/news/post', 'posts.post');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
