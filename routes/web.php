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
// produqciis routi \\
Route::get('/product','Web\ProductController@index')->name('product');
//rodesac kategorias davacvebit\\
Route::get('/product/{name}','Web\ProductController@show')->name('show.product');
// produqciis konkretuli gamotana \\
Route::get('/product/{cat}/{id}','Web\ProductController@select')->name('select.product');


Auth::routes();
Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', 'Admin\HomeController@index')->name('dashboard.home');
    Route::resource('/categories', 'Admin\CategoryController');
    Route::resource('/products', 'Admin\ProductController');
});

/*Route::group(['middleware' => ['role:admin']], function () {
    //
});*/
