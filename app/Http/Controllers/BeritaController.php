<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil_Beranda;
use App\Models\Berita_Beranda;
use Carbon\Carbon;
use Illuminate\Support\Str;


class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita_Beranda::with('galeriFirst')
                    ->where('jenis_berita', 'BERITA')
                    ->get();

        return view('berita', compact('berita'));
    }

    public function show($id)
    {
        $profil = Profil_Beranda::first();
        $berita = Berita_Beranda::with('galeri')->findOrFail($id);
        return view('berita-show', compact('berita', 'profil'));
    }
}


