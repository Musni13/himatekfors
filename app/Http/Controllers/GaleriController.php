<?php

namespace App\Http\Controllers;

use App\Models\Galeri_Beranda;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = Galeri_Beranda::whereNull('code') // hanya yang tidak terkait berita
                    ->latest()
                    ->take(16)
                    ->get();

        return view('galeri', compact('galeri'));
    }
}
