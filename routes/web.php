<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\JurusanController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/halo', function () {
    return 'Halo, Laravel!';
});

Route::get('/produk', [ProdukController::class, 'index'])
    ->name('produk.index');

Route::get('/produk/{id}', [ProdukController::class, 'show'])
    ->name('produk.show');

Route::get('/profil', [MahasiswaController::class, 'profil'])
    ->name('mahasiswa.profil');

Route::get('jurusan',[JurusanController::class, 'index']);

Route::get('/jurusan/{id}', [JurusanController::class, 'show']);