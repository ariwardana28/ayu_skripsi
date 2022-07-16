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

// User/Riwayat
Route::get('riwayat/{id}','User\RiwayatController@index')->name('riwayat.index');

// Admin/Berkas
Route::get('admin/berkas','Admin\BerkasController@index')->name('admin.berkas.index');
Route::post('admin/berkas/verifikasi/{id}','Admin\BerkasController@verifikasi')->name('admin.berkas.verifikasi');
