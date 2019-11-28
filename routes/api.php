<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');
Route::get('send_reset_password_code', 'AuthController@sendResetPasswordCode');
Route::post('reset_password', 'AuthController@passwordReset');

Route::group(['middleware' => 'auth.jwt'], function () {
    Route::get('logout', 'AuthController@logout');
});

Route::resource('products', 'ProductAPIController');
Route::get('products/search/{search}', 'ProductAPIController@search');

Route::resource('categories', 'categoriesAPIController');

Route::resource('sub_categories', 'SubCategoriesAPIController');

Route::resource('stores', 'StoreAPIController');

Route::resource('store_products', 'StoreProductAPIController');