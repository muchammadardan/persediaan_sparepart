<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListrikController;
use App\Http\Controllers\MekanikController;
use App\Http\Controllers\SparepartController;


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

// tampil data mekanik
Route::get('/data_mekanik', [MekanikController::class, 'index'])->name('data_mekanik');

// tambah data
Route::get('/add_mekanik', [MekanikController::class, 'add_mekanik'])->name('add_mekanik');
Route::post('/in_mekanik', [MekanikController::class, 'in_mekanik'])->name('in_mekanik');

// Edit data mekanik

Route::get('/edit_mekanik/{id}', [MekanikController::class, 'edit_mekanik'])->name('edit_mekanik');
Route::post('/up_mekanik/{id}', [MekanikController::class, 'up_mekanik'])->name('up_mekanik');

// hapus data mekanik

Route::get('/del_mekanik/{id}', [MekanikController::class,'del_mekanik'])->name('del_mekanik');


// tampil data listrik
Route::get('/electricity.listrik',[ListrikController::class, 'index'])->name('/electricity.listrik');
