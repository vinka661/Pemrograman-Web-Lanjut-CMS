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
//Route::get('/article', 'ArticleController@Article');
Route::get('/art', 'MoreArtController@Art');
Route::get('/product', 'ProductController@Product');
Route::get('/collect', 'MoreCollectController@Collect');
Auth::routes();

Route::get('/', function () {
    return view('home');
});

Auth:: routes();
Route::get('/home', 'HomeController1@home1')->name('home');
Route::get('/article', 'ArticleController@Article')->name('article');
//route untuk menampilkan halaman tambah data
Route::get('/collect/add', 'MoreCollectController@add');
//route untuk memproses penambahan data
Route::post('/collect/create', 'MoreCollectController@create');
//route untuk menampilkan halaman edit data
Route::get('/collect/edit/{id}', 'MoreCollectController@edit');
//route untuk memproses update data
Route::post('/collect/update/{id}', 'MoreCollectController@update');
//route untuk memproses hapus data
Route::get('/collect/delete/{id}', 'MoreCollectController@delete');
//route untuk menampilkan halaman tambah data
Route::get('/art/add', 'MoreArtController@add');
//route untuk memproses penambahan data
Route::post('/art/create', 'MoreArtController@create');
//route untuk menampilkan halaman edit data
Route::get('/art/edit/{id}', 'MoreArtController@edit');
//route untuk memproses update data
Route::post('/art/update/{id}', 'MoreArtController@update');
//route untuk memproses hapus data
Route::get('/art/delete/{id}', 'MoreArtController@delete');
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/manage', 'ManageUserController@ManageUser');
//route untuk menampilkan halaman tambah data
Route::get('/manage/add', 'ManageUserController@add');
//route untuk memproses penambahan data
Route::post('/manage/create', 'ManageUserController@create');
//route untuk menampilkan halaman edit data
Route::get('/manage/edit/{id}', 'ManageUserController@edit');
//route untuk memproses update data
Route::post('/manage/update/{id}', 'ManageUserController@update');
//route untuk memproses hapus data
Route::get('/manage/delete/{id}', 'ManageUserController@delete');