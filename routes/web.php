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
// use App\pegawai;
// use App\jabatan;
// use App\golongan;
// use App\user;



Route::get('/result', 'pegawaiController@search');

Route::get('/home', 'HomeController@index');
Route::resource('/golongan', 'golonganController');
Route::resource('/jabatan', 'jabatanController');
Route::resource('/kategori', 'KategoriController');

Route::resource('/lembur', 'lemburController');
Route::resource('/tunjangan', 'TunjanganController');
Route::resource('/tunpeg', 'TunjanganPegawaiController');
Route::resource('/pegawai', 'pegawaiController');
Route::resource('/penggajian', 'penggajianController');
Auth::routes();
// Route::group(['middleware' => 'web'],function(){
 	
// });
// Route::group(['middleware' => ['web','auth']], function()
// 	{
// 		Route::get('/home', 'HomeController@index');
// 		Route::get('/',function(){
// 			if (Auth::user()->permission == 1) {
// 				 $pegawai = pegawai::all();
// 				 $golongan = golongan::all();
//         		$user = User::all();
// 				return view('pegawai/index',compact('pegawai','golongan','user'));
// 			} else  {
// 					return view('tunpeg/index');
// 			}

// 		});
// 	});

