@extends('layouts.app_auth')

@section('content')

<!-- HEADER -->
<div class="text-center mb-6">
    <h1 class="text-2xl font-bold text-white">Dashboard Mahasiswa</h1>
    <p class="text-white/60 text-sm">
        Selamat datang, {{ auth()->user()->name ?? 'Mahasiswa' }}
    </p>
</div>

<!-- CARD MENU -->
<div class="grid grid-cols-1 gap-4">

    <!-- KRS -->
    <a href="/krs">
        <div class="bg-white/10 backdrop-blur border border-white/20 rounded-xl p-4 shadow-lg hover:scale-[1.02] transition">
            <h2 class="text-white font-semibold">KRS</h2>
            <p class="text-white/60 text-sm">Ambil dan kelola mata kuliah</p>
        </div>
    </a>

    <!-- KHS -->
    <a href="/khs">
        <div class="bg-white/10 backdrop-blur border border-white/20 rounded-xl p-4 shadow-lg hover:scale-[1.02] transition">
            <h2 class="text-white font-semibold">KHS</h2>
            <p class="text-white/60 text-sm">Lihat hasil studi (nilai)</p>
        </div>
    </a>

</div>

<!-- LOGOUT BUTTON -->
<div class="mt-6">
    <a href="/logout"
        class="w-full block text-center bg-gradient-to-r from-red-500 to-pink-500 text-white py-2 rounded-xl font-semibold 
               shadow-lg shadow-red-500/30 hover:scale-[1.03] active:scale-[0.97] transition duration-200">
        Logout
    </a>
</div>

@endsection