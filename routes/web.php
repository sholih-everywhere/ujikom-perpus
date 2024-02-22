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

Route::get('/dashboard', function () {
    return view('layouts.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ini routes administrator
Route::view('/admindata', 'Administrator.adm-databarang');
Route::view('/adminlaporan', 'Administrator.adm-laporan');
Route::view('/adminpinjam', 'Administrator.adm-peminjaman');

// ini routes peminjam
Route::view('/peminjampinjam', 'peminjam.pm-peminjaman');

// ini routes petugas
Route::view('/petugasdata', 'petugas.pt-peminjaman');
Route::view('/petugaslaporan', 'petugas.pt-laporan');
