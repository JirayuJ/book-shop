<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Auth::routes();
// Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Auth::routes();

Route::get('product', 'AdminController@product');

Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['is_admin']], function(){
        Route::get('/', 'AdminController@index');
        
        // Route::group(['middleware' => 'product'], function(){
                

        // });
    });
    
});

Route::get('/logout', 'Auth\LoginController@logout');

// Route::get('login','Auth\AdminAuthController@getLogin')->name('adminLogin');
// Route::get('admin/login','Auth\AdminAuthController@getLogin')->name('adminLogin');
// Route::post('admin/login', 'Auth\AdminAuthController@postLogin')->name('adminLoginPost');
// Route::get('admin/logout', 'Auth\AdminAuthController@logout')->name('adminLogout');




Route::get('/', 'FrontController@index')->name('home');
Route::post('add-to-cart/{id}', 'CartSystemController@addItem');

Route::post('update-cart', 'CartSystemController@update');
Route::get('get-to-cart', 'CartSystemController@detail'); 




Route::get('clear-cart', 'CartSystemController@clear');



Route::get('new_product', 'FrontController@new_product');
Route::get('best_selling', 'FrontController@best_selling');
Route::get('discount', 'FrontController@discount');
Route::get('recommend_product', 'FrontController@recommend_product');


Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/order', 'HomeController@order')->name('order');
    // Route::get('users', ['uses'=>'UserController@index', 'as'=>'users.index']);

    Route::post('checkout', 'CheckoutController@index');
    Route::post('check-confirm', 'CheckoutController@confirm');
});




Route::get('detail/{id}', 'FrontController@detail');






