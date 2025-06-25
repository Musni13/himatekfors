<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita_Beranda;
use App\Models\Background_Berita;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
class InformasiController extends Controller
{
    public function index()
    {
        $background = Background_Berita::first();
        $berita = Berita_Beranda::all(); // Ambil data pertama (jika ada)
        return view('admin.berita.berita', compact('berita', 'background'));
    }

    public function updateBackground(Request $request)
    {
        // Ambil background (asumsikan hanya satu baris, ID = 1)
        $background = Background_Berita::first(); // atau ->find(1)

        // Validasi input
        $validator = Validator::make($request->all(), [
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:10248|dimensions:width=1920,height=1280',

            ],[

            'gambar.required'        => 'Gambar Wajib Dimasukkan!',
            'gambar.dimensions'      => 'Ukuran Gambar Wajib 1920 x 1280!',
            'gambar.max'             => 'Gambar Maksimal 10 MB',
        ]);

         if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with('error', $validator->errors()->first()); // tampilkan error flash
            }

        // Jika ada file baru diupload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($background && $background->gambar && File::exists(public_path('assets/img/informasi/' . $background->gambar))) {
                File::delete(public_path('assets/img/informasi/' . $background->gambar));
            }

            // Simpan gambar baru
            $file = $request->file('gambar');
            $namaFile = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/img/informasi'), $namaFile);

            // Simpan ke database
            if (!$background) {
                $background = new Background();
            }
            $background->gambar = $namaFile;
            $background->save();
        }

        return redirect()->back()->with('success', 'Data Berhasil Diperbarui!');
    }

    public function create()
    {
        return view('admin.berita.berita-create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'nama'           => 'required|string|max:255',
            'random_code'    => 'required|unique',
            'jenis_berita'   => 'required|in:BERITA,KEGIATAN,PENGUMUMAN',
            'tanggal'        => 'required|date',
            'is_active'      => 'required|in:AKTIF,NONAKTIF',
            'detail_berita'  => 'required|string',
            
        ],[
            'nama.required'          => 'Nama Wajib Diisi!',
            'random_code.required'   => 'Generate Kode Wajib Dilalukan!',
            'detail_berita.required' => 'Detail Berita Wajib Diisi!',
            'jenis_berita.required'  => 'Jenis Berita Wajib Dipilih!',
            'tanggal.required'       => 'Tanggal Wajib Diisi!',
            'is_active.required'     => 'Status Wajib Dipilih!'
  
        ]);
        
          if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with('error', $validator->errors()->first()); // tampilkan error flash
            }
            
        // Simpan data
        Berita_Beranda::create([
            'nama'          => $request->nama,
            'detail_berita' => $request->detail_berita,
            'jenis_berita'  => $request->jenis_berita,
            'random_code'   => $request->random_code,
            'tanggal'       => $request->tanggal,
            'is_active'     => $request->is_active,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('informasi')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function show($id)
    {
        $berita = Berita_Beranda::findOrFail($id);
        return view('admin.berita.berita-show', compact('berita'));
    }

     public function edit($id)
    {
        $berita = Berita_Beranda::findOrFail($id);
        return view('admin.berita.berita-edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'nama'           => 'required|string|max:255',
            'detail_berita'  => 'required|string',
            'jenis_berita'   => 'required|in:BERITA,KEGIATAN,PENGUMUMAN',
            'tanggal'        => 'required|date',
            'is_active'      => 'required|in:AKTIF,NONAKTIF',
        
             ],[

            'nama.required'          => 'Nama Wajib Diisi!',
            'detail_berita.required' => 'Detail Berita Wajib Diisi!',
            'jenis_berita.required'  => 'Jenis Berita Wajib Dipilih!',
            'tanggal.required'       => 'Tanggal Wajib Diisi!',
            'is_active.required'     => 'Status Wajib Dipilih!'

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', $validator->errors()->first()); // tampilkan error flash
        }

        // Cari data berdasarkan ID
        $berita = Berita_Beranda::findOrFail($id);

        // Update data
        $berita->update([
            'nama'          => $request->nama,
            'detail_berita' => $request->detail_berita,
            'jenis_berita'  => $request->jenis_berita,
            'tanggal'       => $request->tanggal,
            'is_active'     => $request->is_active,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('informasi')->with('success', 'Data Berhasil Diperbarui!');
    }

    public function delete($id)
    {
        $berita = Berita_Beranda::findOrFail($id);

        $berita->delete();

        return redirect()->route('informasi')->with('success', 'Data Berhasil Dihapus!');
    }

}
