@extends('admin.layouts.master')

@section('title', 'Beranda')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800" style="font-weight: bold;">BERANDA</h1>
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

    <form action="{{ route('hero.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- Form Input -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Form Data Beranda</h6>
                    </div>
                    <div class="card-body border-bottom-primary">
                        <!-- Nama -->
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" 
                                value="{{ old('nama', $hero->nama ?? '') }}" >
                        </div>

                        <!-- Slogan -->
                        <div class="form-group">
                            <label>Slogan</label>
                            <input type="text" name="slogan" class="form-control" 
                                value="{{ old('slogan', $hero->slogan ?? '') }}" >
                        </div>

                        <!-- URL Youtube -->
                        <div class="form-group">
                            <label>URL Youtube</label>
                            <input type="text" name="url_youtube" class="form-control" 
                                value="{{ old('url_youtube', $hero->url_youtube ?? '') }}" >
                        </div>

                        <!-- Tombol Simpan -->
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>

            <!-- Upload Logo -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4 border-bottom-primary">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Gambar Logo</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group text-center">
                            @if(!empty($hero->logo))
                                <img src="{{ asset('assets/img/beranda/' . $hero->logo) }}" 
                                     alt="Logo" class="img-fluid mt-2 mb-2" style="max-width: 300px;">
                            @endif
                            <input type="file" name="logo" class="form-control-file" 
                                {{ empty($hero->logo) ? '' : '' }}>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
