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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/berita', 'HomeController@berita');
Route::get('/berita', 'AdminController@berita');
Route::get('/berita/tambah', 'AdminController@tambah');
Route::post('/berita/store', 'AdminController@store');

Route::group(['prefix' => 'admin'], function(){
	Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.home');
	Route::get('/berita', 'AdminController@berita');
});

Route::group(['prefix' => 'users,admin'], function(){
	Route::get('/berita', 'HomeController@berita');
});