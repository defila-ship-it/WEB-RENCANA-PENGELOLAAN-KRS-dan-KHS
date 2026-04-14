<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\KhsController;

// route utama ke dashboard
Route::get('/', [MahasiswaController::class, 'index']);

Route::get('/dashboard', [MahasiswaController::class, 'index']);
Route::get('/krs', [KrsController::class, 'index']);
Route::get('/khs', [KhsController::class, 'index']);