<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil_Beranda;
use App\Models\Berita_Beranda;
use Carbon\Carbon;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatan = Berita_Beranda::with('galeriFirst')
                    ->where('jenis_berita', 'KEGIATAN')
                    ->get();
        return view('kegiatan', compact('kegiatan'));
    }

    public function show($id)
    {
        $profil = Profil_Beranda::first();
        $kegiatan = Berita_Beranda::with('galeri')->findOrFail($id);
        return view('kegiatan-show', compact('kegiatan', 'profil'));
    }
}


