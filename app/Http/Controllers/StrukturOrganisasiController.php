<?php

namespace App\Http\Controllers;

use App\Models\Struktur_Organisasi;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $struktur = Struktur_Organisasi::orderBy('divisi')->orderBy('posisi')->get();

    // Kelompok non-divisi tetap
    $kelompok = [
        'PIMPINAN' => $struktur->where('jabatan', 'PIMPINAN'),
        'BENDAHARA' => $struktur->where('jabatan', 'BENDAHARA'),
        'SEKRETARIS' => $struktur->where('jabatan', 'SEKRETARIS'),
    ];

    // Ambil kombinasi divisi & posisi unik dari pimpinan divisi
    $grupDivisi = $struktur
        ->where('jabatan', 'PIMPINAN DIVISI')
        ->groupBy(function($item) {
            return $item->divisi . '-' . $item->posisi;
        });

    $divisiData = [];

    foreach ($grupDivisi as $key => $items) {
        $first = $items->first(); // ambil salah satu sebagai referensi

        $divisi = $first->divisi;
        $posisi = $first->posisi;

        $divisiData[] = [
            'divisi' => $divisi,
            'posisi' => $posisi,
            'pimpinan' => $struktur->where('jabatan', 'PIMPINAN DIVISI')
                                   ->where('divisi', $divisi)
                                   ->where('posisi', $posisi),
            'anggota' => $struktur->where('jabatan', 'ANGGOTA DIVISI')
                                  ->where('divisi', $divisi)
                                  ->where('posisi', $posisi),
        ];
    }

    // Urutkan berdasarkan posisi agar tampil berurutan
    usort($divisiData, fn($a, $b) => $a['posisi'] <=> $b['posisi']);

    return view('struktur', compact('kelompok', 'divisiData'));
}




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Struktur_Organisasi $struktur_Organisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Struktur_Organisasi $struktur_Organisasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Struktur_Organisasi $struktur_Organisasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Struktur_Organisasi $struktur_Organisasi)
    {
        //
    }
}
