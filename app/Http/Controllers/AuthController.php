<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// untuk kelola autentikasi
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // tampilkan login
    public function login()
    {
        return view('auth.login', ['title' => 'Login']);
    }

    // proses login
    public function prosesLogin(Request $request)
    {

        // validasi input
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // cek autentikasi login
        if (Auth::attempt($credentials)) {

            // update session
            $request->session()->regenerate();

            // simpan data pengguna login
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect('/admin');
            } else {
                return redirect('/');
            }
        }

        // jika gagal
        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        // Mengakhiri autentikasi pengguna
        Auth::logout();

        // Menghancurkan session
        $request->session()->invalidate();

        // Membuat token CSRF baru
        $request->session()->regenerateToken();

        return redirect('login');
    }
}
