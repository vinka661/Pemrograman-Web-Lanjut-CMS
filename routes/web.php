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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('index', function () {
    return view('index');
});*/

Route::get('/home1', 'HomeController1@Home1');
Route::get('/about', 'AboutController@About');
Route::get('/contact', 'ContactController@Contact');
Route::get('/article', 'ArticleController@Article');
Route::get('/art', 'MoreArtController@Art');
Route::get('/product', 'ProductController@Product');
Route::get('/collect', 'MoreCollectController@Collect');
Auth::routes();

Route::get('/', function () {
    return view('home');
});

Auth:: routes();
Route::get('/home', 'HomeController1@home1')->name('home');
