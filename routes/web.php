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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

//Route::get('/home', 'HomeController@index');
Route::get('/','web\HomeController@index');

Route::resource('blogs', 'BlogController');

Route::resource('news', 'NewController');

Route::resource('matches', 'MatchController');

Route::resource('matchFutures', 'MatchFutureController');

Route::resource('siteReviews', 'SiteReviewController');