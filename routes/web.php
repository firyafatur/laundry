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

Route::get('/', function () {
    return view('welcome');
});

/* Route Sistem Auth */
Route::get('/registrasi', 'AuthController@halamanRegistrasi')->name('registrasi');
Route::get('/login', 'AuthController@halamanLogin')->name('login');
Route::get('/login_verifikasi', 'AuthController@loginVerifikasi')->name('verifikasi');
Route::get('/logout', 'AuthController@prosesLogout')->name('logout');

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
