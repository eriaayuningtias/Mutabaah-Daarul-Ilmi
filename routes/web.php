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
    return view('profile');
});

Route::get('/mutabaah', function () {
    return view('mutabaah');
});

Auth::routes();

Route::get('/home', 'MutabaahController@view')->name('home');

Route::post('/home', 'MutabaahController@tambah')->name('rekam_mutabaah');

Route::get('/mutabaah', 'MutabaahController@view')->name('isi_mutabaah');
Route::get('/mutabaah/riwayat', 'MutabaahController@riwayatUser')->name('riwayat_mutabaah');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Admin Page
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function()
{
	Route::get('/mutabaah', 'AdminController@mutabaah_hariini')->name('mutabaah_hariini');
	Route::post('/riwayat', 'AdminController@riwayat_anggota')->name('riwayat_anggota');

	Route::get('/anggota', 'AdminController@view_anggota')->name('view_anggota');
	Route::post('/anggota/tambah', 'AdminController@tambah_anggota')->name('tambah_anggota');
	Route::post('/anggota/hapus', 'AdminController@hapus_anggota')->name('hapus_anggota');
	Route::post('/anggota/edit', 'AdminController@edit_anggota')->name('edit_anggota');
	Route::post('/anggota/update', 'AdminController@update_anggota')->name('update_anggota');
	Route::post('/anggota/password', 'AdminController@password_anggota')->name('password_anggota');
});