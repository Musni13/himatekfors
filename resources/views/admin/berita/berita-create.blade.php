@extends('admin.layouts.master')
@section('title', 'Informasi')
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800" style="font-weight: bold;">INFORMASI</h1>
    </div>

     @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-times-circle"></i> {{ session('error') }}
            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form action="{{ route('informasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- Form Input -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Informasi</h6>
                    </div>
                    <div class="card-body border-bottom-primary">
                        <!-- Nama -->
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Informasi">
                        </div>
                        
                       <div class="form-group">
                            <label>Kode Gambar</label>
                            <div class="input-group">
                                <input type="text" name="random_code" id="random_code" class="form-control" placeholder="Masukkan random code">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-secondary" onclick="generateRandomCode()">Generate</button>
                                </div>
                            </div>
                        </div>

                        <!-- Jenis Informasi -->
                        <div class="form-group">
                            <label>Jenis Informasi</label>
                            <select name="jenis_berita" class="form-control">
                                <option value="">-- Pilih Jenis Informasi --</option>
                                <option value="BERITA">BERITA</option>
                                <option value="KEGIATAN">KEGIATAN</option>
                                <option value="PENGUMUMAN">PENGUMUMAN</option>
                            </select>
                        </div>
  
                        <!-- Tanggal -->
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" class="form-control">
                        </div>
                        
                        <!-- Status -->
                        <div class="form-group">
                            <label>Status</label>
                            <select name="is_active" class="form-control">
                                <option value="AKTIF">AKTIF</option>
                                <option value="NONAKTIF">NON AKTIF</option>
                            </select>
                        </div>
                        
                        <!-- Detail Informasi -->
                        <div class="form-group">
                            <label>Detail Informasi</label>
                            <textarea name="detail_berita" rows="4" class="form-control" placeholder="Masukkan Detail Informasi"></textarea>
                        </div>
                        
                        <!-- Tombol Simpan -->
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>

<script>
    function generateRandomCode(length = 6) {
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        let result = '';
        for (let i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * characters.length));
        }
        document.getElementById('random_code').value = result;
    }
</script>
@endsection
