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

Route::get('/', function () { //halaman utama
    return view('welcome');
});

Route::get('tugas4', function () {
    return view('tugasempat');
});

Route::get('praktikum2', function () {
    return view('praktikumkedua');
});

Route::get('ets', "EtsController@showForm");

Route::get('tugasphp', "TugasPHPController@calculateForm");
Route::post('fact', "TugasPHPController@calculateResults");

//Tutorial pak FJ
Route::get('isiannama', "ViewController@showForm");
Route::post('greetings', "ViewController@resultGreetings");

//route belajar_laravel
Route::get('/pegawai','PegawaiController@index'); //home
Route::get('/pegawai/tambah','PegawaiController@tambah'); //tambah pegawai
Route::post('/pegawai/store','PegawaiController@store'); //simpan hasil tambah pegawai
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

//Tugas PWEB Query Builder 25 Nov 2021
Route::get('/tugas','TugasQueryBuilder@home');
Route::get('/tugas/tambah','TugasQueryBuilder@tambah');
Route::post('/tugas/store','TugasQueryBuilder@store');
Route::get('/tugas/edit/{id}','TugasQueryBuilder@edit');
Route::post('/tugas/update','TugasQueryBuilder@update');
Route::get('/tugas/hapus/{id}','TugasQueryBuilder@hapus');
