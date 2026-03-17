@extends('layouts.app_auth')

@section('title', 'Forgot Password')

@section('content')

{{-- ERROR --}}
@if(session('error'))
<div class="mb-4 p-3 rounded-lg bg-red-100/70 backdrop-blur text-red-600 text-sm animate-pulse shadow">
    {{ session('error') }}
</div>
@endif

{{-- SUCCESS (opsional nanti kepakai) --}}
@if(session('success'))
<div class="mb-4 p-3 rounded-lg bg-green-100/70 backdrop-blur text-green-600 text-sm shadow">
    {{ session('success') }}
</div>
@endif

<form method="POST" action="/forgot-password" class="space-y-5" id="forgotForm">
    @csrf

    <!-- Email -->
    <div>
        <label class="text-sm text-gray-200">Email</label>
        <input
            type="email"
            name="email"
            required
            placeholder="Masukkan email kamu..."
            class="w-full mt-1 px-4 py-2 bg-white/20 backdrop-blur border border-white/30 text-white placeholder-gray-200 rounded-xl focus:ring-2 focus:ring-cyan-400 outline-none transition shadow-inner">
    </div>

    <!-- Button -->
    <button
        type="submit"
        id="btnForgot"
        class="w-full bg-gradient-to-r from-purple-400 to-blue-500 text-white py-2 rounded-xl font-semibold 
               shadow-lg shadow-purple-500/30 hover:scale-[1.03] active:scale-[0.97] transition duration-200 flex justify-center items-center gap-2">

        <span id="btnText">Cek Email</span>

        <!-- Loading Spinner -->
        <svg id="loading" class="hidden w-5 h-5 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="white" stroke-width="4"></circle>
            <path class="opacity-75" fill="white"
                d="M4 12a8 8 0 018-8v8H4z">
            </path>
        </svg>
    </button>
</form>

<!-- Divider -->
<div class="flex items-center my-4">
    <hr class="flex-grow border-white/30">
    <span class="mx-2 text-sm text-white/60">atau</span>
    <hr class="flex-grow border-white/30">
</div>

<!-- Back to Login -->
<div class="text-center">
    <a href="/login" class="text-cyan-300 text-sm hover:underline hover:text-white transition">
        Kembali ke Login
    </a>
</div>

<!-- Footer -->
<p class="text-center text-xs text-white/50 mt-6">
    © {{ date('Y') }} Sistem Akademik
</p>

{{-- SCRIPT --}}
<script>
    // loading button
    document.getElementById('forgotForm').addEventListener('submit', function() {
        document.getElementById('btnText').innerText = "Memproses...";
        document.getElementById('loading').classList.remove('hidden');
    });
</script>

@endsection