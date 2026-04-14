<?php 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login'); // Buat file login.blade.php terpisah
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/krs', function () {
    return view('krs');
});
Route::get('/khs', function () {
    return view('khs');
});

Route::get('/profil', function () {
    return view('profil');
});
Route::get('/jadwal', function () {
    return view('jadwal');
});