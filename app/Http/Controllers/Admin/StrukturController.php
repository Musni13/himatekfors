<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Models\Struktur_Organisasi;

class StrukturController extends Controller
{
     public function index()
    {
        $struktur = Struktur_Organisasi::all();
        return view('admin.struktur.index', compact('struktur'));
    }

     public function create()
    {
        return view('admin.struktur.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'nama'           => 'required|string|max:255',
            'nph'            => 'required|string||min:15|unique:struktur_organisasi,nph',
            'jabatan'        => 'required|in:PIMPINAN,BENDAHARA,SEKRETARIS,PIMPINAN DIVISI,ANGGOTA DIVISI',
            'divisi'         => 'required',
            'posisi'         => 'required',
            'periode'        => 'required',
            'gambar'         => 'required|image|mimes:jpeg,png,jpg|max:10248',
            'is_active'      => 'required|in:AKTIF,NONAKTIF',

            ],[

            'nama.required'      => 'Nama Wajib Diisi!',
            'nama.max'           => 'Nama Maksimal 255 Karakter!',
            'nph.required'       => 'NPH Wajib Diisi!',
            'nph.min'            => 'NPH Minimal 15 Karakter!',
            'jabatan.required'   => 'Jabatan Wajib Dipilih!',
            'divisi.required'    => 'Divisi Wajib Diisi!',
            'periode.required'   => 'Periode Wajib Diisi!',
            'posisi.required'    => 'Posisi Wajib Diisi!',
            'gambar.required'    => 'Gambar Wajib Dimasukkan!',
            'gambar.max'         => 'Gambar Maksimal 10 MB',
            'is_active.required' => 'Status Wajib Dipilih!'

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
            $gambar->move(public_path('assets/img/struktur'), $namaGambar);
        }

        // Simpan data
        Struktur_Organisasi::create([
            'nama'          => $request->nama,
            'nph'           => $request->nph,
            'jabatan'       => $request->jabatan,
            'divisi'        => $request->divisi,
            'periode'       => $request->periode,
            'posisi'        => $request->posisi,
            'is_active'     => $request->is_active,
            'gambar'        => $namaGambar ?? null,
            
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.struktur')->with('success', 'Data Berhasil Ditambahkan!');
    }

     public function show($id)
    {
        $struktur = Struktur_Organisasi::findOrFail($id);
        return view('admin.struktur.show', compact('struktur'));
    }

      public function edit($id)
    {
        $struktur = Struktur_Organisasi::findOrFail($id);
        return view('admin.struktur.edit', compact('struktur'));
    }

    public function update(Request $request, $id)
{
    $struktur = Struktur_Organisasi::findOrFail($id);

    // Validasi
    $validator = Validator::make($request->all(), [
        'nama'      => 'required|string|max:255',
        'nph'       => 'required|string|max:255|unique:struktur_organisasi,nph,' . $id,
        'jabatan'   => 'required|string|max:255',
        'divisi'    => 'nullable|string|max:255',
        'posisi'    => 'required|string|max:255',
        'periode'   => 'required|string|max:255',
        'is_active' => 'required|in:AKTIF,NONAKTIF',
        'gambar'    => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'is_active'      => 'required|in:AKTIF,NONAKTIF',
    
        ],[

        'nama.required'      => 'Nama Wajib Diisi!',
        'nama.max'           => 'Nama Maksimal 255 Karakter!',
        'nph.required'       => 'NPH Wajib Diisi!',
        'nph.min'            => 'NPH Minimal 15 Karakter!',
        'jabatan.required'   => 'Jabatan Wajib Dipilih!',
        'divisi.required'    => 'Divisi Wajib Diisi!',
        'periode.required'   => 'Periode Wajib Diisi!',
        'posisi.required'    => 'Posisi Wajib Diisi!',
        'gambar.required'    => 'Gambar Wajib Dimasukkan!',
        'gambar.max'         => 'Gambar Maksimal 10 MB',
        'is_active.required' => 'Status Wajib Dipilih!'

    ]);

    if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', $validator->errors()->first()); // tampilkan error flash
    }

    // Update field
    $struktur->nama      = $request->nama;
    $struktur->nph       = $request->nph;
    $struktur->jabatan   = $request->jabatan;
    $struktur->divisi    = $request->divisi;
    $struktur->posisi    = $request->posisi;
    $struktur->periode   = $request->periode;
    $struktur->is_active = $request->is_active;

    // Cek jika ada upload gambar baru
    if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
        if ($struktur->gambar && file_exists(public_path('assets/img/struktur/' . $struktur->gambar))) {
            unlink(public_path('assets/img/struktur/' . $struktur->gambar));
        }

        // Simpan gambar baru
        $file = $request->file('gambar');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/struktur/'), $filename);
        $struktur->gambar = $filename;
    }

    // Simpan perubahan
    $struktur->save();

    return redirect()->route('admin.struktur')->with('success', 'Data Berhasil Diperbarui!');
}


    public function delete($id)
    {
        $struktur = Struktur_Organisasi::findOrFail($id);

        // Hapus gambar jika ada
        if ($struktur->gambar && file_exists(public_path('assets/img/struktur/' . $struktur->gambar))) {
            unlink(public_path('assets/img/struktur/' . $struktur->gambar));
        }

        $struktur->delete();

        return redirect()->route('admin.struktur')->with('success', 'Data Berhasil Dihapus!');
    }
}

