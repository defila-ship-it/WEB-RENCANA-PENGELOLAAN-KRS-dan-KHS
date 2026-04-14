<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\BarangController;

Route::get('/barang', [BarangController::class, 'tampilkan']);

// LOGIN
Route::get('/', function () {
    return view('login');
});

// DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
});

// ✅ KRS (INI YANG DIPERBAIKI)
Route::get('/krs', [BarangController::class, 'tampilkan']);

// LAINNYA
Route::get('/khs', function () {
    return view('khs');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

// LOGOUT
Route::get('/logout', function () {
    Session::flush();
    return redirect('/');
});