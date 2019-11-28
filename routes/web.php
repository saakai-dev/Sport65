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
Route::get('/', 'web\HomeController@index');

Route::resource('blogs', 'web\BlogController');

Route::resource('news', 'web\NewController');

Route::resource('matches', 'web\MatchController');

Route::resource('matchFutures', 'web\MatchFutureController');

Route::resource('siteReviews', 'web\SiteReviewController');