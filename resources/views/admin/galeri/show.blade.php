@extends('admin.layouts.master')
@section('title', 'Galeri')
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800" style="font-weight: bold;">GALERI</h1>
    </div>
        <div class="row">
            <!-- Form Input -->
            <div class="col-xl-6 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Lihat Data Galeri </h6>
                    </div>
                    <div class="card-body border-bottom-primary">
                    <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($galeri->tanggal)->locale('id')->isoFormat('D MMMM Y') }}</p>
                    <hr>
                    <p><strong>Code:</strong> {{ $galeri->code }}</p>
                    <hr>
                    <p><strong>Status:</strong> @if ($galeri->is_active === 'AKTIF')
                                                    <span class="badge badge-success">AKTIF</span>
                                                    @else
                                                    <span class="badge badge-danger">NON AKTIF</span>
                                                    @endif
                                                </p>
                    <hr>
                        
                        <!-- Tombol Simpan -->
                        <a href="{{ route('admin.galeri') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>

            <!-- Upload Gambar -->
            <div class="col-xl-6 col-lg-5">
                <div class="card shadow mb-4 border-bottom-primary">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Gambar</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            @if ($galeri->gambar)
                           <img src="{{ asset('assets/img/galeri/' . $galeri->gambar) }}" alt="Gambar" class="img-fluid d-block mx-auto mt-2" style="max-width: 500px;">

                             @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection

