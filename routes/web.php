<?php

use Illuminate\Support\Facades\Route;

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


// pages
Route::get('/','PagesController@home');
Route::get('/mkt','PagesController@marketing');
Route::get('/prt','PagesController@properti');
Route::get('/ktk','PagesController@create');
Route::get('/mkt/{marketing}','PagesController@mkt_info');
Route::get('/pyk/{proyek}', 'PagesController@pyk_info');
Route::get('/prt/{tipe}', 'PagesController@prt_info');
Route::get('/simulasi', 'PagesController@simulasi');
Route::get('/tes', 'PagesController@tes');

// tambah pemesanan
Route::post('/pemesanan', 'PagesController@store');

//  admin
// promo
Route::get('/promo','PromoController@index');
// proyek
Route::get('/proyek','ProyekController@index');
// pemesanan
Route::get('/pemesanan','PemesananController@index');
// tambah proyek
Route::get('/proyek/tambah_proyek','ProyekController@upload');
Route::post('/proyek/tambah_proyek/proses','ProyekController@proses_upload');
// tambah promo
Route::get('/promo/tambah_promo','PromoController@upload');
Route::post('/promo/tambah_promo/proses','PromoController@proses_upload');
// tipe rumah
Route::get('/proyek/tipe_rumah','TipeController@index');
// marketing
Route::get('/marketing','MarketingController@index');
// tambah tipe rumah
Route::get('/proyek/tipe_rumah/tambah_tipe','TipeController@upload');
Route::post('/proyek/tipe_rumah/tambah_tipe/proses','TipeController@proses_upload');
// tambah marketing
Route::get('/marketing/tambah_marketing','MarketingController@upload');
Route::post('/marketing/tambah_marketing/proses','MarketingController@proses_upload');
// show proyek spesifik
Route::get('/proyek/{proyek}','ProyekController@show');
// show promo spesifik
Route::get('/promo/{promo}','PromoController@show');
// // show pemesanan spesifik
// Route::get('/pemesanan/{pemesanan}','PemesananController@show');
// show tipe rumah spesifik
Route::get('/proyek/tipe_rumah/{tipe}','TipeController@show');
// show marketing spesifik
Route::get('/marketing/{marketing}','MarketingController@show');
// edit proyek
Route::get('/proyek/{proyek}/edit','ProyekController@edit');
Route::patch('/proyek/{proyek}','ProyekController@update');
// edit tipe rumah
Route::get('/proyek/tipe_rumah/{tipe}/edit','TipeController@edit');
Route::patch('/proyek/tipe_rumah/{tipe}','TipeController@update');
// edit marketing
Route::patch('/marketing/{marketing}','MarketingController@update');
// edit marketing
Route::patch('/promo/{promo}','PromoController@update');
// hapus proyek
Route::delete('/proyek/{proyek}','ProyekController@destroy');
// hapus tipe
Route::delete('/proyek/tipe_rumah/{tipe}','TipeController@destroy');
// hapus marketing
Route::delete('/marketing/{marketing}','MarketingController@destroy');
// hapus promo
Route::delete('/promo/{promo}','PromoController@destroy');
// hapus pemesanan
Route::delete('/pemesanan/{pemesanan}','PemesananController@destroy');
// cari pemesanan
Route::get('/pemesanan/cari','PemesananController@cari');
//edit pemesanan
Route::get('/pemesanan{id}/edit','PemesananControllert@edit');
Route::put('/ubahstatus/{id}', 'PemesananController@ubahStatus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
