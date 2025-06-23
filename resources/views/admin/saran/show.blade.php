@extends('admin.layouts.master')
@section('title', 'Saran')
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800" style="font-weight: bold;">SARAN</h1>
    </div>
        <div class="row">
            <!-- Form Input -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Lihat Data</h6>
                    </div>
                    <div class="card-body border-bottom-primary">
                    <p><strong>Nama:</strong> {{ $saran->nama }}</p>
                    <hr>
                    <p><strong>E-Mail:</strong> {{ $saran->email }}</p>
                    <hr>
                    <p><strong>Judul:</strong> {{ $saran->judul }}</p>
                   <hr>
                    <p><strong>Pesan:</strong></p>
                    <div class="mb-3" style="white-space: pre-wrap;">{{ $saran->pesan }}</div>

                        <!-- Tombol Simpan -->
                        <a href="{{ route('saran') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection

