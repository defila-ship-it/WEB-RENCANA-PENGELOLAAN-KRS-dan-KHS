<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // tampilkan halaman login
    public function showLogin()
    {
        return view('auth.login');
    }

    // proses login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            // redirect berdasarkan role
            if (Auth::user()->role == 'admin') {
                return redirect('/admin');
            } elseif (Auth::user()->role == 'dosen') {
                return redirect('/dosen');
            } else {
                return redirect('/mahasiswa');
            }
        }

        return back()->with('error', 'Email atau password salah');
    }

    // tampil forgot password
    public function showForgot()
    {
        return view('auth.forgot');
    }

    // proses cek email
    public function forgotPassword(Request $request)
    {
        $email = $request->email;

        $user = \App\Models\User::where('email', $email)->first();

        if (!$user) {
            return back()->with('error', 'Email tidak ditemukan');
        }

        // redirect ke reset password
        return redirect('/reset-password/' . $email);
    }

    // tampil reset password
    public function showReset($email)
    {
        return view('auth.reset', compact('email'));
    }

    // proses reset password
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6'
        ]);

        $user = \App\Models\User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'User tidak ditemukan');
        }

        $user->password = \Illuminate\Support\Facades\Hash::make($request->password);
        $user->save();

        return redirect('/login')->with('success', 'Password berhasil direset');
    }

    // logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
