<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index()
    {
        $hero = Hero::first(); // Ambil data pertama (jika ada)
        return view('admin.hero', compact('hero'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama'            => 'required',
            'slogan'          => 'required',
            'url_youtube'     => 'required|url',
            'logo'            => $request->hasFile('logo') ? 'image|mimes:jpg,jpeg,png|max:10248|dimensions:width=1920,height=1052' : '',
        
            ],[

            'nama.required'         => 'Nama Wajib Diisi!',
            'logo.required'       => 'Gambar Wajib Dimasukkan!',
            'logo.dimensions'      => 'Ukuran Gambar Wajib 1920 x 1052!',
            'logo.max'            => 'Gambar Maksimal 10 MB',
            'slogan.required'       => 'Slogan Wajib Diisi!',
            'url_youtube.required'  => 'URL Youtube Wajib Diisi!',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', $validator->errors()->first()); // tampilkan error flash
        }

        $hero = Hero::first();

        if ($request->hasFile('logo')) {
            if ($hero && $hero->logo && file_exists(public_path('assets/img/beranda/' . $hero->logo))) {
                unlink(public_path('assets/img/beranda/' . $hero->logo));
            }

            $logoName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('assets/img/beranda'), $logoName);
        } else {
            $logoName = $hero->logo ?? null;
        }

        $data = [
            'nama' => $request->nama,
            'logo' => $logoName,
            'slogan' => $request->slogan,
            'url_youtube' => $request->url_youtube,
        ];

        if ($hero) {
            $hero->update($data);
        } else {
            Hero::create($data);
        }

        return redirect()->route('hero')->with('success', 'Data Berhasil Disimpan!');
    }

}
