<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// halaman awal
Route::get('/', function () {
    return redirect('/login');
});


// =======================
// AUTH (LOGIN)
// =======================
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);


// =======================
// FORGOT PASSWORD
// =======================
Route::get('/forgot-password', [AuthController::class, 'showForgot']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);

Route::get('/reset-password/{email}', [AuthController::class, 'showReset']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);


// =======================
// DASHBOARD (ROLE)
// =======================
Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/dosen', function () {
    return view('dosen.dashboard');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa.dashboard');
});
