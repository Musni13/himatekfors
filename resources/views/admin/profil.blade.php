@extends('admin.layouts.master')

@section('title', 'Profil')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800" style="font-weight: bold;">PROFIL</h1>
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

    <form action="{{ route('profil.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- Kolom Kiri - Form Profil -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Form Data Profil</h6>
                    </div>
                    <div class="card-body border-bottom-primary">
                        <!-- Nama -->
                        <div class="form-group">
                            <textarea name="nama" class="form-control" rows="13" >{{ old('nama', $profil->nama ?? '') }}</textarea>
                        </div>

                        <!-- Tombol Simpan -->
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>

           <!-- Kolom Kanan - Gambar -->
            <div class="col-xl-4 col-lg-5">
                <!-- Card Gambar Depan -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Gambar Profil</h6>
                    </div>
                    <div class="card-body border-bottom-primary">
                        <div class="form-group">
                            @if(!empty($profil->gambar_depan))
                                <img src="{{ asset('assets/img/profil/' . $profil->gambar_depan) }}" 
                                    alt="Gambar Depan" class="img-fluid mt-2 mb-2" style="max-width: 300px;">
                            @endif
                            <input type="file" name="gambar_depan" class="form-control-file" 
                                {{ empty($profil->gambar_depan) ? '' : '' }}>
                        </div>
                    </div>
                </div>

                <!-- Card Gambar Belakang -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Background</h6>
                    </div>
                    <div class="card-body border-bottom-primary">
                        <div class="form-group">
                            @if(!empty($profil->gambar_belakang))
                                <img src="{{ asset('assets/img/profil/' . $profil->gambar_belakang) }}" 
                                    alt="Gambar Belakang" class="img-fluid mt-2 mb-2" style="max-width: 300px;">
                            @endif
                            <input type="file" name="gambar_belakang" class="form-control-file" 
                                {{ empty($profil->gambar_belakang) ? '' : '' }}>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
