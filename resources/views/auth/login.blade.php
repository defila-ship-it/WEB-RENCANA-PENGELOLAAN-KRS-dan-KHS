@extends('layouts.app_auth')

@section('title', 'Login')

@section('content')

{{-- ERROR --}}
@if(session('error'))
<div class="mb-4 p-3 rounded-lg bg-red-100/70 backdrop-blur text-red-600 text-sm animate-pulse shadow">
    {{ session('error') }}
</div>
@endif

<form method="POST" action="/login" class="space-y-5" id="loginForm">
    @csrf

    <!-- Email -->
    <div>
        <label class="text-sm text-gray-200">Email</label>
        <input
            type="email"
            name="email"
            required
            placeholder="example@gmail.com"
            class="w-full mt-1 px-4 py-2 bg-white/20 backdrop-blur border border-white/30 text-white placeholder-gray-200 rounded-xl focus:ring-2 focus:ring-blue-400 outline-none transition shadow-inner">
    </div>

    <!-- Password -->
    <div class="relative">
        <label class="text-sm text-gray-200">Password</label>

        <input
            type="password"
            name="password"
            id="password"
            required
            placeholder="••••••••"
            class="w-full mt-1 px-4 py-2 bg-white/20 backdrop-blur border border-white/30 text-white placeholder-gray-200 rounded-xl focus:ring-2 focus:ring-blue-400 outline-none transition shadow-inner">

        <!-- 🔥 Heroicons Toggle -->
        <button
            type="button"
            onclick="togglePassword()"
            class="absolute right-3 top-9 text-white/70 hover:text-white transition">

            <!-- Eye Open -->
            <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 12s3.75-7.5 9.75-7.5S21.75 12 21.75 12s-3.75 7.5-9.75 7.5S2.25 12 2.25 12z" />
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>

            <!-- Eye Closed -->
            <svg id="eyeClose" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-5 h-5 hidden">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 3l18 18M10.5 10.5a3 3 0 004.24 4.24M6.53 6.53C4.46 8.08 3 10.5 3 12c0 0 3.75 7.5 9.75 7.5 1.5 0 2.91-.3 4.2-.83M9.88 4.24A9.77 9.77 0 0112 4.5c6 0 9.75 7.5 9.75 7.5a14.94 14.94 0 01-2.19 3.19" />
            </svg>

        </button>
    </div>

    <!-- Button -->
    <button
        type="submit"
        id="btnLogin"
        class="w-full bg-gradient-to-r from-cyan-400 to-blue-500 text-white py-2 rounded-xl font-semibold 
               shadow-lg shadow-blue-500/30 hover:scale-[1.03] active:scale-[0.97] transition duration-200 flex justify-center items-center gap-2">

        <span id="btnText">Login</span>

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

<!-- Forgot -->
<div class="text-center">
    <a href="/forgot-password" class="text-cyan-300 text-sm hover:underline hover:text-white transition">
        Lupa Password?
    </a>
</div>

<!-- Footer -->
<p class="text-center text-xs text-white/50 mt-6">
    © {{ date('Y') }} Sistem Akademik
</p>

{{-- SCRIPT --}}
<script>
    function togglePassword() {
        const pass = document.getElementById('password');
        const eyeOpen = document.getElementById('eyeOpen');
        const eyeClose = document.getElementById('eyeClose');

        if (pass.type === 'password') {
            pass.type = 'text';
            eyeOpen.classList.add('hidden');
            eyeClose.classList.remove('hidden');
        } else {
            pass.type = 'password';
            eyeOpen.classList.remove('hidden');
            eyeClose.classList.add('hidden');
        }
    }

    // loading button
    document.getElementById('loginForm').addEventListener('submit', function() {
        document.getElementById('btnText').innerText = "Loading...";
        document.getElementById('loading').classList.remove('hidden');
    });
</script>

@endsection