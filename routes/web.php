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

// User/Berkas
Route::get('berkas','User\BerkasController@index')->name('berkas.index');
Route::get('berkas/create','User\BerkasController@create')->name('berkas.create');
Route::post('berkas','User\BerkasController@store')->name('berkas.store');
Route::get('berkas/{id}/file','User\BerkasController@file')->name('berkas.file');
Route::get('berkas/{id}','User\BerkasController@edit')->name('berkas.edit');
Route::post('berkas/{id}/update','User\BerkasController@update')->name('berkas.update');
Route::post('berkas/verifikasi/{id}','User\BerkasController@verifikasi')->name('berkas.verifikasi');
Route::post('berkas/verifikasiseksi/{id}','User\BerkasController@seksi')->name('berkas.seksi');
Route::post('berkas/verifikasibidang/{id}','User\BerkasController@bidang')->name('berkas.bidang');
Route::post('berkas/verifikasidinas/{id}','User\BerkasController@dinas')->name('berkas.dinas');

// User/Riwayat
Route::get('riwayat/{id}','User\RiwayatController@index')->name('riwayat.index');

// Admin/Berkas
Route::get('admin/berkas','Admin\BerkasController@index')->name('admin.berkas.index');
Route::post('admin/berkas/verifikasi/{id}','Admin\BerkasController@verifikasi')->name('admin.berkas.verifikasi');
Route::post('admin/berkas/{id}/update','Admin\BerkasController@update')->name('admin.berkas.update');
Route::get('admin/berkas/{id}/show','Admin\BerkasController@show')->name('admin.berkas.show');

// Admin/Visi
Route::get('visi','Admin\VisiController@index')->name('admin.visi.index');
Route::get('visi/create','Admin\VisiController@create')->name('admin.visi.create');
Route::post('visi','Admin\VisiController@store')->name('admin.visi.store');
Route::get('visi/{id}','Admin\VisiController@edit')->name('admin.visi.edit');
Route::post('visi/{id}/update','Admin\VisiController@update')->name('admin.visi.update');
Auth::routes();

// Seksi/Berkas
Route::get('seksi/berkas','Seksi\BerkasController@index')->name('seksi.berkas.index');
Route::post('seksi/berkas/verifikasi/{id}','Seksi\BerkasController@verifikasi')->name('seksi.berkas.verifikasi');

// Seksi/Berkas
Route::get('bidang/berkas','Bidang\BerkasController@index')->name('bidang.berkas.index');
Route::post('bidang/berkas/verifikasi/{id}','Bidang\BerkasController@verifikasi')->name('bidang.berkas.verifikasi');

// Dinas/Berkas
Route::get('dinas/berkas','Dinas\BerkasController@index')->name('dinas.berkas.index');
Route::post('dinas/berkas/verifikasi/{id}','Dinas\BerkasController@verifikasi')->name('dinas.berkas.verifikasi');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'DepanController@index')->name('depan');
