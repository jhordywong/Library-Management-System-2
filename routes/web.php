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
/*
Route::get('/', function () {
    return view('home');
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
/*
Route::get('/user', 'UserController@index');
Route::get('/user-register', 'UserController@create');
Route::post('/user-register', 'UserController@store');
Route::get('/user-edit/{id}', 'UserController@edit');
*/
Route::resource('user', 'UserController');

Route::get('password-reset', 'PasswordController@showForm'); //I did not create this controller. it simply displays a view with a form to take the email
Route::post('password-reset', 'PasswordController@sendPasswordResetToken');
Route::get('reset-password/{token}', 'PasswordController@showPasswordResetForm');
Route::post('reset-password/{token}', 'PasswordController@resetPassword');


Route::resource('anggota', 'AnggotaController');

Route::resource('buku', 'BukuController');
Route::get('/format_buku', 'BukuController@format');
Route::post('/import_buku', 'BukuController@import');

Route::resource('transaksi', 'TransaksiController');
Route::get('/laporan/trs', 'LaporanController@transaksi');
Route::get('/laporan/trs/pdf', 'LaporanController@transaksiPdf');
Route::get('/laporan/trs/excel', 'LaporanController@transaksiExcel');

Route::get('/laporan/buku', 'LaporanController@buku');
Route::get('/laporan/buku/pdf', 'LaporanController@bukuPdf');
Route::get('/laporan/buku/excel', 'LaporanController@bukuExcel');

Route::get('/register', 'UserRegistrationController@create');
Route::post('register', 'UserRegistrationController@store');


Route::get('/datadiri', 'DaftarAnggotaController@create');
Route::post('datadiri', 'DaftarAnggotaController@store');