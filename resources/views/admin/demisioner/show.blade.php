@extends('admin.layouts.master')
@section('title', 'Demisioner')
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800" style="font-weight: bold;">DEMISIONER</h1>
    </div>
        <div class="row">
            <!-- Form Input -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Lihat Data {{ $demisioner->nama }}</h6>
                    </div>
                    <div class="card-body border-bottom-primary">
                    <p><strong>Nama:</strong> {{ $demisioner->nama }}</p>
                    <hr>
                    <p><strong>NPH:</strong> {{ $demisioner->nph }}</p>
                    <hr>
                    <p><strong>Periode:</strong> {{ $demisioner->periode }}</p>
                    <hr>
                    <p><strong>Facebook:</strong> {{ $demisioner->facebook ?? '-'}}</p>
                    <hr>
                    <p><strong>Instagram:</strong> {{ $demisioner->instagram ?? '-'}}</p>
                    <hr>
                    <p><strong>Twitter:</strong> {{ $demisioner->twiter ?? '-'}}</p>
                    <hr>
                    <p><strong>Status:</strong> @if ($demisioner->is_active === 'AKTIF')
                                                    <span class="badge badge-success">AKTIF</span>
                                                    @else
                                                    <span class="badge badge-danger">NON AKTIF</span>
                                                    @endif
                                                </p>
                    <hr>
                        <!-- Tombol Simpan -->
                        <a href="{{ route('admin.demisioner') }}" class="btn btn-primary">Kembali</a>
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
                            @if ($demisioner->gambar)
                            <img src="{{ asset('assets/img/demisioner/' . $demisioner->gambar) }}" alt="Gambar" class="img-fluid mt-2" style="max-width: 300px;">
                             @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection

