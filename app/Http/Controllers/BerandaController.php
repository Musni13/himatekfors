<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Profil_Beranda;
use App\Models\Struktur_Organisasi;
use App\Models\Berita_Beranda;
use App\Models\Background_Berita;
use App\Models\Galeri_Beranda;
use App\Models\Masukan_Beranda;
use Illuminate\Support\Str;
class BerandaController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $profil = Profil_Beranda::first();
        $struktur = Struktur_Organisasi::all();
        $berita = Berita_Beranda::with('galeriFirst')
                    ->where('jenis_berita', 'KEGIATAN')
                    ->get();
        $background = Background_Berita::first();
        $galeri = Galeri_Beranda::where('is_active', 'AKTIF')->latest()->take(8)->get();
        return view('beranda', compact('hero', 'profil', 'struktur', 'berita', 'background', 'galeri'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'judul' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        Masukan_Beranda::create($validated);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
