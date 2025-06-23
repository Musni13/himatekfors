<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visi_Misi;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visi = Visi_Misi::all();
        return view('visimisi', compact('visi'));
    } 
}
