<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\Profil_Beranda;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil_Beranda::first();
        return view('admin.profil', compact('profil'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'gambar_depan' => $request->hasFile('gambar_depan') ? 'image|mimes:jpg,jpeg,png|max:10240|dimensions:width=1033,height=768' : '',
            'gambar_belakang' => $request->hasFile('gambar_belakang') ? 'image|mimes:jpg,jpeg,png|max:10240|dimensions:width=1920,height=1280' : '',
        
        ],[

            'nama.required'                 => 'Profil Wajib Diisi!',
            'gambar_depan.required'         => 'Gambar Profil Wajib Dimasukkan!',
            'gambar_depan.dimensions'       => 'Ukuran Gambar Wajib 1033 x 768!',
            'gambar_depan.max'              => 'Gambar Maksimal 10 MB',
            'gambar_belakang.required'      => 'Background Wajib Dimasukkan!',
            'gambar_belakang.dimensions'    => 'Ukuran Gambar Wajib 1920 x 1280!',
            'gambar_belakang.max'           => 'Gambar Maksimal 10 MB',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', $validator->errors()->first()); // tampilkan error flash
        }

        $profil = Profil_Beranda::first();

        // Simpan gambar depan
        if ($request->hasFile('gambar_depan')) {
            if ($profil && $profil->gambar_depan && file_exists(public_path('assets/img/profil/' . $profil->gambar_depan))) {
                unlink(public_path('assets/img/profil/' . $profil->gambar_depan));
            }

            $depanName = 'depan_' . time() . '.' . $request->gambar_depan->extension();
            $request->gambar_depan->move(public_path('assets/img/profil'), $depanName);
        } else {
            $depanName = $profil->gambar_depan ?? null;
        }

        // Simpan gambar belakang
        if ($request->hasFile('gambar_belakang')) {
            if ($profil && $profil->gambar_belakang && file_exists(public_path('assets/img/profil/' . $profil->gambar_belakang))) {
                unlink(public_path('assets/img/profil/' . $profil->gambar_belakang));
            }

            $belakangName = 'belakang_' . time() . '.' . $request->gambar_belakang->extension();
            $request->gambar_belakang->move(public_path('assets/img/profil'), $belakangName);
        } else {
            $belakangName = $profil->gambar_belakang ?? null;
        }

        $data = [
            'nama' => $request->nama,
            'gambar_depan' => $depanName,
            'gambar_belakang' => $belakangName,
        ];

        if ($profil) {
            $profil->update($data);
        } else {
            Profil_Beranda::create($data);
        }

        return redirect()->route('profil')->with('success', 'Data Berhasil Disimpan!');
    }

}
