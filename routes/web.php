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
    Route::post('tambah-pesanan', 'DataController@tambahPesananKalibrasi');
    Route::get('data-pesanan-kalibrasi', 'DataController@pesananKalibrasiPage');
    Route::get('detail-pemesanan/{id}', 'DataController@detailPesanan');
    Route::get('delete-pesanan/{id}', 'DataController@deletePesanan');
    Route::post('tambah-pelanggan', 'DataController@tambahPelanggan');
});
