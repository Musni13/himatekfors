@extends('admin.layouts.master')
@section('title', 'Galeri')
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800" style="font-weight: bold;">GALERI</h1>
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

    <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- Form Input -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Galeri</h6>
                    </div>
                    <div class="card-body border-bottom-primary">

                        <!-- Nama -->
                        <div class="form-group">
                            <label>Code</label>
                            <input type="text" name="code" class="form-control" placeholder="Masukkan Code">
                        </div>

                        <!-- Status -->
                        <div class="form-group">
                            <label>Status</label>
                            <select name="is_active" class="form-control">
                                <option value="AKTIF">AKTIF</option>
                                <option value="NONAKTIF">NON AKTIF</option>
                            </select>
                        </div>
                        
                        <!-- Tombol Simpan -->
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>

            <!-- Upload Gambar -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4 border-bottom-primary">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Gambar</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="file" name="gambar" class="form-control-file">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>

@endsection
