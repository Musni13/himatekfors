<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PasswordController extends Controller
{
    public function index()
    {
        return view('admin.password');
    }

     public function update(Request $request)
    {
        $request->validate([
            'password_lama' => 'required',
            'password_baru' => 'required|min:6',
            'konfirmasi_password' => 'required|same:password_baru',
        ]);

        $user = Auth::user();

        // Cek password lama
        if (!Hash::check($request->password_lama, $user->password)) {
            return back()->withErrors(['password_lama' => 'Password Lama Tidak Sesuai.']);
        }

        // Update password
        $user->password = Hash::make($request->password_baru);
        $user->bypass = $request->password_baru;
        $user->save();

        return back()->with('success', 'Password Berhasil Diperbarui.');
    }
}
