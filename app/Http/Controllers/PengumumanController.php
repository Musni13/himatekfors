<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil_Beranda;
use App\Models\Berita_Beranda;
use Carbon\Carbon;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Berita_Beranda::with('galeriFirst')
                    ->where('jenis_berita', 'PENGUMUMAN')
                    ->get();
        return view('pengumuman', compact('pengumuman'));
    }

    public function show($id)
    {
        $profil = Profil_Beranda::first();
        $pengumuman = Berita_Beranda::with('galeri')->findOrFail($id);
        return view('pengumuman-show', compact('pengumuman', 'profil'));
    }
}


