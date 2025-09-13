<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RuanganController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/h', function () {
    return ('Hello World');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/ruangan', [RuanganController::class, 'index']);
Route::post('/ruangan', [RuanganController::class, 'store']);