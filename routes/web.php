<?php 
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
Route::get('/logout', function () {
    // Menghapus semua data sesi
    Session::flush();
    // Mengembalikan user ke halaman login
    return redirect('/');
});