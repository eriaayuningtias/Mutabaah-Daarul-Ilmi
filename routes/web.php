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
    return view('homer');
});

Route::get('/profile', function () {
    return view('profile');
});

Auth::routes();

Route::get('/home', 'MutabaahController@view')->name('home');

Route::post('/home', 'MutabaahController@tambah')->name('rekam_mutabaah');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Admin Page
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function()
{
	Route::get('/mutabaah', 'MutabaahController@view')->name('view_mutabaah');
});
