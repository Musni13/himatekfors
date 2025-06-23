<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Models\Masukan_Beranda;

class SaranController extends Controller
{
     
       public function index()
    {
        $saran = Masukan_Beranda::all();
        return view('admin.saran.index', compact('saran'));
    }

       public function show($id)
    {
        $saran = Masukan_Beranda::first();
        return view('admin.saran.show', compact('saran'));
    }
}

