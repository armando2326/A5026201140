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

Route::get('isiannama', "ViewController@showForm");
Route::post('greetings', "ViewController@resultGreetings");
