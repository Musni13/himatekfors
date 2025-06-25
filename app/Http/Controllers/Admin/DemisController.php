<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Models\Demisioner;

class DemisController extends Controller
{
      public function index()
    {
        $demisioner = Demisioner::all();
        return view('admin.demisioner.index', compact('demisioner'));
    }

    public function create()
    {
        return view('admin.demisioner.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'nama'       => 'required|string|max:255',
            'nph'        => 'required|string|min:15|unique:struktur_organisasi,nph',
            'periode'    => 'required|string|max:255',
            'facebook'   => 'nullable|string|max:255',
            'instagram'  => 'nullable|string|max:255',
            'twitter'    => 'nullable|string|max:255',
            'gambar'     => 'required|image|mimes:jpeg,png,jpg|max:10240|dimensions:width=600,height=600',
            'is_active'  => 'required|in:AKTIF,NONAKTIF',

            ],[

            'nama.required'      => 'Nama Wajib Diisi!',
            'nama.max'           => 'Nama Maksimal 255 Karakter!',
            'nph.required'       => 'NPH Wajib Diisi!',
            'nph.min'            => 'NPH Minimal 15 Karakter!',
            'periode.required'   => 'Periode Wajib Diisi!',
            'periode.required'   => 'Periode Maksimal 255 Karakter!',
            'gambar.required'    => 'Gambar Wajib Dimasukkan!',
            'gambar.dimensions'  => 'Ukuran Gambar Wajib 600 x 600!',
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
        $namaGambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaGambar = time() . '_' . Str::slug($request->nama) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('assets/template/img'), $namaGambar);
        }

        // Simpan data
        Demisioner::create([
            'nama'       => $request->nama,
            'nph'        => $request->nph,
            'periode'    => $request->periode,
            'facebook'   => $request->facebook,
            'instagram'  => $request->instagram,
            'twitter'    => $request->twitter,
            'is_active'  => $request->is_active,
            'gambar'     => $namaGambar,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.demisioner')->with('success', 'Data Berhasil Ditambahkan!');
    }

     public function show($id)
    {
        $demisioner = Demisioner::findOrFail($id);
        return view('admin.demisioner.show', compact('demisioner'));
    }

    public function edit($id)
    {
        $demisioner = Demisioner::findOrFail($id);
        return view('admin.demisioner.edit', compact('demisioner'));
    }

     public function update(Request $request, $id)
    {
        $demisioner = Demisioner::findOrFail($id);

        // Validasi
        $validator = Validator::make($request->all(), [
            'nama'       => 'required|string|max:255',
            'nph'        => 'required|string|min:15|unique:struktur_organisasi,nph,' . $id,
            'periode'    => 'required|string|max:255',
            'facebook'   => 'nullable|string|max:255',
            'instagram'  => 'nullable|string|max:255',
            'twitter'    => 'nullable|string|max:255',
            'gambar'     => 'nullable|image|mimes:jpeg,png,jpg|max:10240|dimensions:width=600,height=600',
            'is_active'  => 'required|in:AKTIF,NONAKTIF',
        ], [
            'nama.required'      => 'Nama Wajib Diisi!',
            'nama.max'           => 'Nama Maksimal 255 Karakter!',
            'nph.required'       => 'NPH Wajib Diisi!',
            'nph.min'            => 'NPH Minimal 15 Karakter!',
            'periode.required'   => 'Periode Wajib Diisi!',
            'gambar.required'    => 'Gambar Wajib Dimasukkan!',
            'gambar.max'         => 'Gambar Maksimal 10 MB',
            'gambar.dimensions'  => 'Ukuran Gambar Wajib 600 x 600!',
            'is_active.required' => 'Status Wajib Dipilih!',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', $validator->errors()->first());
        }

        // Hapus gambar lama jika upload baru
        if ($request->hasFile('gambar')) {
            if ($demisioner->gambar && file_exists(public_path('assets/img/demisioner/' . $demisioner->gambar))) {
                unlink(public_path('assets/img/demisioner/' . $demisioner->gambar));
            }

            // Upload gambar baru
            $file = $request->file('gambar');
            $filename = time() . '_' . Str::slug($request->nama) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/img/demisioner/'), $filename);
            $demisioner->gambar = $filename;
        }

        // Update field lain
        $demisioner->nama      = $request->nama;
        $demisioner->nph       = $request->nph;
        $demisioner->periode   = $request->periode;
        $demisioner->facebook  = $request->facebook;
        $demisioner->instagram = $request->instagram;
        $demisioner->twitter   = $request->twitter;
        $demisioner->is_active = $request->is_active;

        $demisioner->save();

        return redirect()->route('admin.demisioner')->with('success', 'Data Berhasil Diperbarui!');
    }

    public function delete($id)
    {
        $demisioner = Demisioner::findOrFail($id);

        // Hapus gambar jika ada
        if ($demisioner->gambar && file_exists(public_path('assets/img/demisioner/' . $demisioner->gambar))) {
            unlink(public_path('assets/img/demisioner/' . $demisioner->gambar));
        }

        $demisioner->delete();

        return redirect()->route('admin.demisioner')->with('success', 'Data Berhasil Dihapus!');
    }
}
