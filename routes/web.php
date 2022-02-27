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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/transaksi', function () {
    return view('transaksi', [
        "title" => "Transaksi"
    ]);
});

Route::get('/laporan', function () {
    return view('laporan', [
        "title" => "Laporan"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muchammad Ardan",
        "email" => "muchammadardan@gmail.com"

    ]);
});

Route::get('/in_mekanik', function () {
    return view('in_mekanik', [
        "title" => "Mekanik"
    ]);
});