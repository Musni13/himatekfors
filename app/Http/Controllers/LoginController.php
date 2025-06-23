<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm() {
        return view('auth');
    }
    
    // Fungsi untuk login
    public function authenticate(Request $request)
    {
        // Validasi input pengguna
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cari pengguna berdasarkan username
        $user = User::where('username', $request->username)->first();

        // Jika user ditemukan dan passwordnya cocok
        if ($user && Hash::check($request->password, $user->password)) {
            // Autentikasi pengguna
            Auth::login($user);

            return redirect()->route('hero');
        }

        // Jika kredensial tidak valid
        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    public function logout()
    {
        Auth::logout(); // Hapus sesi login
        return redirect()->route('auth'); // Redirect ke halaman login
    }

}
