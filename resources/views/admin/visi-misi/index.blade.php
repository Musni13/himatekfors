@extends('admin.layouts.master')
@section('title', 'Visi & Misi')
@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800" style="font-weight: bold;">TUJUAN, USAHA & SIFAT</h1>
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

    <form action="{{ route('visi-misi.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <!-- Visi -->
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Data {{ $tujuan->nama }}</h6>
                    </div>
                    <div class="card-body border-bottom-primary">
                        <div class="form-group">
                            <textarea name="tujuan_keterangan" rows="4" class="form-control">{{ $tujuan->keterangan }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Misi -->
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Data {{ $usaha->nama }}</h6>
                    </div>
                    <div class="card-body border-bottom-primary">
                        <div class="form-group">
                            <textarea name="usaha_keterangan" rows="4" class="form-control">{{ $usaha->keterangan }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sifat -->
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Data {{ $sifat->nama }}</h6>
                    </div>
                    <div class="card-body border-bottom-primary">
                        <div class="form-group">
                            <textarea name="sifat_keterangan" rows="4" class="form-control">{{ $sifat->keterangan }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol Simpan -->
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

@endsection
