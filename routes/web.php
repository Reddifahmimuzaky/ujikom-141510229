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

route::get('/', function(){
	return redirect()->to('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('/golongan', 'golonganController');
Route::resource('/jabatan', 'jabatanController');
Route::resource('/kategori', 'KategoriController');
Route::resource('/pegawai', 'PegawaiController');
Route::resource('/lembur', 'lemburController');
Route::resource('/tunjangan', 'TunjanganController');
Route::resource('/tunpeg', 'TunjanganPegawaiController');	
Auth::routes();
