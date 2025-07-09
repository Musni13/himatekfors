<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CKEditorTokenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\UnduhanController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\DemisionerController;

use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\InformasiController;
use App\Http\Controllers\Admin\DatabaseController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\VisiController;
use App\Http\Controllers\Admin\StrukturController;
use App\Http\Controllers\Admin\DemisController;
use App\Http\Controllers\Admin\UnduhController;
use App\Http\Controllers\Admin\SaranController;
use App\Http\Controllers\Admin\PasswordController;
/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/ckeditor/token', [CKEditorTokenController::class, 'generate']);

// Login Page
Route::get('/auth', [LoginController::class, 'showLoginForm'])->name('auth');

// Homepage
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::post('/beranda', [BerandaController::class, 'store'])->name('beranda.store');

Route::get('/visimisi', [VisiMisiController::class, 'index'])->name('visimisi');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/detail-berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
Route::get('/kegiatan/detail-kegiatan/{id}', [KegiatanController::class, 'show'])->name('kegiatan.show');

Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/pengumuman/detail-pengumuman/{id}', [PengumumanController::class, 'show'])->name('pengumuman.show');

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

Route::get('/unduhan', [UnduhanController::class, 'index'])->name('unduhan');
Route::get('/unduhan/download/{filename}', [UnduhanController::class, 'download'])->name('unduhan.download');


Route::get('/struktur_organisasi', [StrukturOrganisasiController::class, 'index'])->name('struktur');


Route::get('/demisioner', [DemisionerController::class, 'index'])->name('demisioner');

// Proses Login

Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

// Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| Admin Routes (With Auth Middleware)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/hero', function () {
        return view('admin.hero');
    })->name('admin.hero');
});

Route::get('/admin/hero', [HeroController::class, 'index'])->name('hero');
Route::post('/admin/hero', [HeroController::class, 'store'])->name('hero.store');

Route::get('/admin/profil', [ProfilController::class, 'index'])->name('profil');
Route::post('/admin/profil', [ProfilController::class, 'store'])->name('profil.store');

Route::get('/admin/berita', [InformasiController::class, 'index'])->name('informasi');
Route::post('/admin/background', [InformasiController::class, 'updateBackground'])->name('admin.background');
Route::get('/admin/berita/tambah', [InformasiController::class, 'create'])->name('informasi.create');
Route::post('/admin/berita/tambah', [InformasiController::class, 'store'])->name('informasi.store');
Route::get('/admin/berita/tampil/{id}', [InformasiController::class, 'show'])->name('informasi.show');
Route::get('/admin/berita/ubah/{id}', [InformasiController::class, 'edit'])->name('informasi.edit');
Route::put('/admin/berita/ubah/{id}', [InformasiController::class, 'update'])->name('informasi.update');
Route::get('/admin/berita/hapus/{id}', [InformasiController::class, 'delete'])->name('informasi.hapus');


Route::get('/admin/galeri', [PhotoController::class, 'index'])->name('admin.galeri');
Route::get('/admin/galeri/tambah', [PhotoController::class, 'create'])->name('galeri.create');
Route::post('/admin/galeri/tambah', [PhotoController::class, 'store'])->name('galeri.store');
Route::get('/admin/galeri/tampil/{id}', [PhotoController::class, 'show'])->name('galeri.show');
Route::get('/admin/galeri/ubah/{id}', [PhotoController::class, 'edit'])->name('galeri.edit');
Route::put('/admin/galeri/ubah/{id}', [PhotoController::class, 'update'])->name('galeri.update');
Route::get('/admin/galeri/hapus/{id}', [PhotoController::class, 'delete'])->name('galeri.hapus');

Route::get('/admin/visi-misi', [VisiController::class, 'index'])->name('admin.visi-misi');
Route::put('/admin/visi-misi', [VisiController::class, 'update'])->name('visi-misi.update');

Route::get('/admin/struktur', [StrukturController::class, 'index'])->name('admin.struktur');
Route::get('/admin/struktur/tambah', [StrukturController::class, 'create'])->name('struktur.create');
Route::post('/admin/struktur/tambah', [StrukturController::class, 'store'])->name('struktur.store');
Route::get('/admin/struktur/tampil/{id}', [StrukturController::class, 'show'])->name('struktur.show');
Route::get('/admin/struktur/ubah/{id}', [StrukturController::class, 'edit'])->name('struktur.edit');
Route::put('/admin/struktur/ubah/{id}', [StrukturController::class, 'update'])->name('struktur.update');
Route::get('/admin/struktur/hapus/{id}', [StrukturController::class, 'delete'])->name('struktur.hapus');

Route::get('/admin/demisioner', [DemisController::class, 'index'])->name('admin.demisioner');
Route::get('/admin/demisioner/tambah', [DemisController::class, 'create'])->name('demisioner.create');
Route::post('/admin/demisioner/tambah', [DemisController::class, 'store'])->name('demisioner.store');
Route::get('/admin/demisioner/tampil/{id}', [DemisController::class, 'show'])->name('demisioner.show');
Route::get('/admin/demisioner/ubah/{id}', [DemisController::class, 'edit'])->name('demisioner.edit');
Route::put('/admin/demisioner/ubah/{id}', [DemisController::class, 'update'])->name('demisioner.update');
Route::get('/admin/demisioner/hapus/{id}', [DemisController::class, 'delete'])->name('demisioner.hapus');

Route::get('/admin/unduhan', [UnduhController::class, 'index'])->name('admin.unduhan');
Route::get('/admin/unduhan/tambah', [UnduhController::class, 'create'])->name('unduhan.create');
Route::post('/admin/unduhan/tambah', [UnduhController::class, 'store'])->name('unduhan.store');
Route::get('/admin/unduhan/hapus/{id}', [UnduhController::class, 'delete'])->name('unduhan.hapus');

Route::get('/admin/saran', [SaranController::class, 'index'])->name('saran');
Route::get('/admin/saran/tampil/{id}', [SaranController::class, 'show'])->name('saran.show');
Route::get('/admin/saran/hapus/{id}', [SaranController::class, 'delete'])->name('saran.hapus');

Route::get('/admin/password', [PasswordController::class, 'index'])->name('password');
Route::put('/admin/password', [PasswordController::class, 'update'])->name('password.update');


Route::get('/admin/database', [DatabaseController::class, 'index'])->name('database');
Route::post('/admin/database', [DatabaseController::class, 'store'])->name('database.store');






