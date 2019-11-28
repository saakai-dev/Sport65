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
Route::get('/', 'web\HomeSiteController@index');

Route::resource('blogs', 'web\BlogController');

Route::resource('news', 'web\NewsController');
Route::resource('news66', 'web\NewsController');

Route::resource('matches', 'web\MatchController');

Route::resource('matchFutures', 'web\MatchFutureController');

Route::resource('siteReviews', 'web\SiteReviewController');

Route::resource('points', 'PointController');

Route::resource('multiMedia', 'MultiMediaController');

Route::resource('topTeams', 'TopTeamController');

Route::post('favorite/{blog}', 'web\BlogController@favoritePost');
Route::post('unfavorite/{blog}', 'web\BlogController@unFavoritePost');

Route::get('my_favorites', 'web\UsersController@myFavorites')->middleware('auth');