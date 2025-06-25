<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri_Beranda;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class PhotoController extends Controller
{
    public function index()
    {
        $galeri = Galeri_Beranda::all(); // Ambil data pertama (jika ada)
        return view('admin.galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validator = Validator::make($request->all(), [
           'gambar'          => 'required|image|mimes:jpeg,png,jpg|max:10248|dimensions:width=800,height=600',
           'code'            => 'required',
            'is_active'      => 'required|in:AKTIF,NONAKTIF',
       ],[
            'gambar.required'        => 'Gambar Wajib Dimasukkan!',
            'gambar.dimensions'      => 'Ukuran Gambar Wajib 800 x 600!',
            'code.required'          => 'Kode Harus diisi',
            'gambar.max'             => 'Gambar Maksimal 10 MB',
            'is_active.required'     => 'Status Wajib Dipilih!'
  
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', $validator->errors()->first()); // tampilkan error flash
        }
        // Upload gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaGambar = time() . '_' . Str::slug($request->nama) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('assets/img/galeri'), $namaGambar);
        }

        // Simpan data
        Galeri_Beranda::create([
            'gambar'        => $namaGambar ?? null,
            'code'          => $request->code,
            'is_active'     => $request->is_active,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.galeri')->with('success', 'Gambar Berhasil Ditambahkan!');
    }

     public function show($id)
    {
        $galeri = Galeri_Beranda::findOrFail($id);
        return view('admin.galeri.show', compact('galeri'));
    }

     public function edit($id)
    {
        $galeri = Galeri_Beranda::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'gambar'    => 'nullable|image|mimes:jpeg,png,jpg|max:10248|dimensions:width=800,height=600',
            'code'      => 'required',
            'is_active' => 'required|in:AKTIF,NONAKTIF',
        ],[
                'gambar.required'        => 'Gambar Wajib Dimasukkan!',
                'code.required'          => 'Kode Harus Diisi!',
                'gambar.dimensions'      => 'Ukuran Gambar Wajib 800 x 600!',
                'gambar.max'             => 'Gambar Maksimal 10 MB!',
                'is_active.required'     => 'Status Wajib Dipilih!'
    
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with('error', $validator->errors()->first()); // tampilkan error flash
            }
        

        // Cari data berdasarkan ID
        $galeri = Galeri_Beranda::findOrFail($id);

        // Update status aktif langsung
        $galeri->is_active = $request->is_active;

        // Cek jika ada file gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($galeri->gambar && file_exists(public_path('assets/img/galeri/' . $galeri->gambar))) {
                unlink(public_path('assets/img/galeri/' . $galeri->gambar));
            }

            // Upload dan simpan gambar baru
            $gambar = $request->file('gambar');
            $namaGambar = time() . '_' . uniqid() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('assets/img/galeri'), $namaGambar);

            $galeri->gambar = $namaGambar;
            $galeri->code = $request->code;
        }

        // Simpan semua perubahan
        $galeri->save();

        return redirect()->route('admin.galeri')->with('success', 'Data Berhasil Diperbarui!');
    }

    public function delete($id)
    {
        $galeri = Galeri_Beranda::findOrFail($id);

        // Hapus gambar jika ada
        if ($galeri->gambar && file_exists(public_path('assets/img/galeri/' . $galeri->gambar))) {
            unlink(public_path('assets/img/galeri/' . $galeri->gambar));
        }

        $galeri->delete();

        return redirect()->route('admin.galeri')->with('success', 'Data Berhasil Dihapus!');
    }
}


