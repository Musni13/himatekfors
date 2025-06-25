<?php

namespace App\Http\Controllers;

use App\Models\Galeri_Beranda;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri_Beranda::where('code', 'like', '%-%')->get();


        return view('galeri', compact('galeri'));
    }
}
