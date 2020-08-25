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
Route::get('/registrasi', 'AuthController@registrasi');
Route::get('/login', 'AuthController@index')->name('login');
Route::get('/login_verifikasi', 'AuthController@loginVerifikasi');
Route::get('/logout', 'AuthController@prosesLogout');

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
