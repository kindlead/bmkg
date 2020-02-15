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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('auth')->group(function(){
    Route::get('/', 'DashboardController@index');
    Route::get('tambah-pesanan', 'DataController@tambahPesananKalibrasi');
    Route::get('data-pesanan-kalibrasi', 'DataController@pesananKalibrasiPage');
    Route::get('detail-pemesanan/{uid}', 'DataController@detailPesanan');
    Route::get('delete-pesanan/{uid}', 'DataController@deletePesanan');
    Route::get('dtPesananKalibrasi', 'DataController@dtPesananKalibrasi');
    Route::get('edit-pesanan/{uid}', 'DataController@editPesanan');
    Route::post('tambah-pesanan', 'DataController@tambahPesananKalibrasi');
    Route::post('edit-pesanan/{uid}', 'DataController@editPesanan');

    
    Route::get('tambah-pelanggan', 'DataController@tambahPelanggan');
    Route::get('data-pelanggan', 'DataController@dataPelanggan');
    Route::get('dtPelanggan', 'DataController@dtPelanggan');
    Route::get('detail-pelanggan/{uid}', 'DataController@detailPelanggan');
    Route::get('delete-pelanggan/{uid}', 'DataController@deletePelanggan');
    Route::get('edit-pelanggan/{uid}', 'DataController@editPelanggan');
    
    
    Route::post('tambah-pelanggan', 'DataController@tambahPelanggan');
    Route::post('edit-pelanggan/{uid}', 'DataController@editPelanggan');
});
