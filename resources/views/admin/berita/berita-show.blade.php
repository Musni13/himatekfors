@extends('admin.layouts.master')
@section('title', 'Berita')
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800" style="font-weight: bold;">INFORMASI</h1>
    </div>
        <div class="row">
            <!-- Form Input -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Lihat Data {{ $berita->nama }}</h6>
                    </div>
                    <div class="card-body border-bottom-primary">
                    <p><strong>Nama:</strong> {{ $berita->nama }}</p>
                    <hr>
                    <p><strong>Jenis Berita:</strong> {{ $berita->jenis_berita }}</p>
                    <hr>
                    <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($berita->tanggal)->locale('id')->isoFormat('D MMMM Y') }}</p>
                    <hr>
                    <p><strong>Status:</strong> @if ($berita->is_active === 'AKTIF')
                                                    <span class="badge badge-success">AKTIF</span>
                                                    @else
                                                    <span class="badge badge-danger">NON AKTIF</span>
                                                    @endif
                                                </p>
                    <hr>
                    <p><strong>Detail:</strong></p>
                    <div class="mb-3" style="white-space: pre-wrap;">{{ $berita->detail_berita }}</div>
                        
                        <!-- Tombol Simpan -->
                        <a href="{{ route('informasi') }}" class="btn btn-primary">Kembali</a>
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
                            @if ($berita->gambar)
                            <img src="{{ asset('assets/img/informasi/' . $berita->gambar) }}" alt="Gambar" class="img-fluid mt-2" style="max-width: 300px;">
                             @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection

