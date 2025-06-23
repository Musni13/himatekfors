<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Visi_Misi;

class VisiController extends Controller
{
     public function index()
    {
        $tujuan = Visi_Misi::where('nama', 'Tujuan')->first();
        $usaha = Visi_Misi::where('nama', 'Usaha')->first();
        $sifat = Visi_Misi::where('nama', 'Sifat')->first();
        return view('admin.visi-misi.index', compact('tujuan', 'usaha', 'sifat'));
    }

    public function update(Request $request)
    {
          $validator = Validator::make($request->all(), [
            'tujuan_keterangan' =>'required',
            'usaha_keterangan'  =>'required',
            'sifat_keterangan'  =>'required',

            ], [
            'tujuan_keterangan.required'    => 'Tujuan Wajib Diisi!',
            'usaha_keterangan.required'     => 'Usaha Wajib Diisi!',
            'sifat_keterangan.required'     => 'Sifat Wajib Diisi!!'
   
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', $validator->errors()->first()); // tampilkan error flash
        }

        Visi_Misi::where('nama', 'Tujuan')->update([
            'keterangan' => $request->tujuan_keterangan,
        ]);

        Visi_Misi::where('nama', 'Usaha')->update([
            'keterangan' => $request->usaha_keterangan,
        ]);
        
        Visi_Misi::where('nama', 'Sifat')->update([
            'keterangan' => $request->sifat_keterangan,
        ]);

        return redirect()->route('admin.visi-misi')->with('success', 'Data Berhasil Disimpan!');
    }

}
