<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Models\Unduhan;

class UnduhController extends Controller
{
       public function index()
    {
        $unduhan = Unduhan::all();
        return view('admin.unduhan.index', compact('unduhan'));
    }

    public function create()
    {
        return view('admin.unduhan.create');
    }

    public function store(Request $request)
    {
        // Validasi file (hanya PDF, maksimal 5MB)
        $validator = Validator::make($request->all(), [
            'file_unduhan' => 'required|file|mimes:pdf|max:10240', // 5120 KB = 5 MB
       
           
        ],[

            'file_unduhan.required' => 'File Wajib Diisi!',
            'file_unduhan.mimes' => 'File Wajib Wajib Menggunakan Format PDF!',
            'file_unduhan.max' => 'File Maksimal 10 mb!',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', $validator->errors()->first()); // tampilkan error flash
        }


        $namaFile = null;

        // Cek jika file diunggah
        if ($request->hasFile('file_unduhan')) {
            $file = $request->file('file_unduhan');

            // Buat nama file unik
            $namaFile = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();

            // Simpan file ke folder public/assets/unduhan
            $file->move(public_path('assets/file'), $namaFile);
        }

        // Simpan data ke database (ganti `Unduhan` sesuai model yang digunakan)
        Unduhan::create([
            'nama' => $namaFile,
        ]);

        return redirect()->route('admin.unduhan')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function delete($id)
    {
        $unduhan = Unduhan::findOrFail($id);

        // Hapus gambar jika ada
        if ($unduhan->gambar && file_exists(public_path('assets/template/img/' . $unduhan->gambar))) {
            unlink(public_path('assets/template/img/' . $unduhan->gambar));
        }

        $unduhan->delete();

        return redirect()->route('admin.unduhan')->with('success', 'Data Berhasil Dihapus!');
    }

}
