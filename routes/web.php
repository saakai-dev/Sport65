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


use App\Models\Match;
use Carbon\Carbon;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'web\HomeSiteController@index')->name('page');
//Route::get(/**
// * @return array
// */ '/', function () {
//
//
//    return ['data' => $match_data, 'toD' => $toDay, 'toM' => $toMorrow,];
//});


Route::resource('blogs', 'web\BlogController')->middleware('auth');

Route::resource('news', 'web\NewsController')->middleware('auth');
Route::resource('news66', 'web\NewsController')->middleware('auth');

Route::resource('matches', 'web\MatchController')->middleware('auth');

Route::resource('siteReviews', 'web\SiteReviewController');
Route::post('p_siteReviews', 'web\SiteReviewController@gustVote')->name('gust.reviews');
Route::get('p_siteReviews', 'web\SiteReviewController@getVote')->name('get.reviews')->middleware('auth');

Route::resource('points', 'PointController')->middleware('auth');

Route::resource('multiMedia', 'MultiMediaController')->middleware('auth');

Route::resource('topTeams', 'TopTeamController')->middleware('auth');
Route::resource('Teams', 'web\TopTeamSiteController');
Route::resource('p_ligue', 'web\LigueSiteController');
Route::resource('ligues', 'LigueController')->middleware('auth');

Route::get('p_blog', 'BlogSiteController@index')->name('p_blog');
Route::get('p_blog/{id}', 'BlogSiteController@show')->name('p_blog.show');
Route::get('blog/{id}', 'BlogSiteController@show')->name('p_blog.show');
Route::post('favorite/{blog}', 'web\BlogController@favoritePost');
Route::post('unfavorite/{blog}', 'web\BlogController@unFavoritePost');

Route::get('my_favorites', 'web\UsersController@myFavorites')->middleware('auth');
