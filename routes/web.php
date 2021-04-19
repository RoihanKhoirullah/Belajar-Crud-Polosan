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
// Login
Route::get('/login', function () {
    return view('pengguna.login');
});
Route::post('/postlogin' , 'LoginController@postlogin')->name('postlogin');
Route::get('/logout' , 'LoginController@logout')->name('logout');

// Registrasi
Route::get('/registrasi' , 'LoginController@registrasi')->name('registrasi');
Route::post('/simpanregistrasi' , 'LoginController@simpanregistrasi')->name('simpanregistrasi');

Route::get('/mahasiswa' , 'MahasiswaController@index')->name('mahasiswa');
Route::post('/simpan-mahasiswa' , 'MahasiswaController@store')->name('simpan-mahasiswa');
Route::get('/edit-mahasiswa/{id}' , 'MahasiswaController@edit')->name('edit-mahasiswa');
Route::post('/update-mahasiswa/{id}' , 'MahasiswaController@update')->name('update-mahasiswa');
Route::get('/delete-mahasiswa/{id}' , 'MahasiswaController@destroy')->name('delete-mahasiswa');
