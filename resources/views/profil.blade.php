@extends('layouts.app', ['title' => 'Profil Mahasiswa'])

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm text-center">
        <div class="w-32 h-32 bg-slate-200 rounded-2xl mx-auto mb-4 flex items-center justify-center border-4 border-white shadow-md overflow-hidden">
            <i class="fas fa-user text-6xl text-gray-400"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800">Ema Merlisa</h3>
        <p class="text-sm text-blue-600 font-semibold italic">2021010001</p>
        
        <div class="mt-6 space-y-3 text-left border-t pt-6">
            <div class="flex justify-between text-sm">
                <span class="text-gray-400">Prodi</span>
                <span class="font-bold">Teknik Informatika</span>
            </div>
            <div class="flex justify-between text-sm">
                <span class="text-gray-400">Tahun Masuk</span>
                <span class="font-bold">2025</span>
            </div>
        </div>
    </div>

    <div class="lg:col-span-2 space-y-6">
        <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm">
            <h4 class="font-bold text-gray-800 mb-6 flex items-center gap-2">
                <i class="fas fa-shield-alt text-blue-500"></i> Keamanan Akun
            </h4>
            <form class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-500 mb-1 uppercase">Password Baru</label>
                        <input type="password" class="w-full border p-2.5 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 mb-1 uppercase">Konfirmasi Password</label>
                        <input type="password" class="w-full border p-2.5 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>
                </div>
                <button class="bg-slate-800 text-white px-8 py-2.5 rounded-xl font-bold hover:bg-slate-900 transition shadow-lg active:scale-95">
                    UPDATE PASSWORD
                </button>
            </form>
        </div>
    </div>
</div>
@endsection