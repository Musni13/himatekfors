<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unduhan;
use Illuminate\Support\Facades\Response;

class UnduhanController extends Controller
{
    // Menampilkan daftar file yang bisa diunduh
    public function index()
    {
        $unduhans = Unduhan::all();
        return view('unduhan', compact('unduhans'));
    }

    public function download($filename)
    {
        $path = public_path("assets/file/{$filename}");

        if (file_exists($path)) {
            return response()->download($path);
        } else {
            abort(404, 'File tidak ditemukan.');
        }
    }
}
