<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Use App\Web\Category;


//Route::get();
Route::get('/','Web\HomeController@index')->name('home');
Route::get('about','Web\AboutController@index')->name('about');
Route::get('contact','Web\ContactController@index')->name('contact');
Route::get('/product','Web\ProductController@index')->name('product');
Route::get('/product/{name}','Web\ProductController@show');
Route::get('/product/{name}/{id}','Web\ProductController@select');



Auth::routes();
Route::get('/admin', 'Admin\HomeController@index');
