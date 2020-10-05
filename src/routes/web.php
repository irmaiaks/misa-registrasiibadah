<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('home', 'HomeController@index');
Route::get('tentang', 'HomeController@tentang');
Route::get('info', 'HomeController@info');
Route::get('kontak', 'HomeController@kontak');
Route::get('scan', 'HomeController@scan');
Route::get('qrcode', 'HomeController@qrcode')->name('qrcode');
Route::get('download', 'HomeController@download_qrcode')->name('download');
Route::get('cancel/{id}', 'HomeController@cancel_ibadah')->name('cancel');
Route::get('pdf/{id}', 'HomeController@pdf')->name('pdf');
Route::get('scan/{id}', 'HomeController@showQrCode')->name('scan');
Route::get('registrasi', 'HomeController@registrasi')->name('registrasi');
Route::get('registrasi-umum', 'HomeController@registrasi_umum')->name('ibadah.umum');
Route::get('registrasi-jadwal', 'HomeController@registrasi_jadwal')->name('ibadah.jadwal');
Route::get('form-registrasi/{id}', 'HomeController@form_registrasi')->name('form.registrasi');

Route::get('cara_penggunaan', 'Auth\RegisterController@cara_penggunaan')->name('cara.penggunaan');
Route::get('data_registrasi', 'HomeController@data_registrasi')->name('data.registrasi');

Route::post('registrasi', 'HomeController@buat_registrasi')->name('store.registrasi');
