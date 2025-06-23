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

    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Data Informasi</h6>
                            <a href="{{ route('informasi.create') }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-plus"></i> Tambah Data
                            </a>
                        </div>
                        <div class="card-body border-bottom-primary">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>NO</th>
                                            <th>TANGGAL</th>
                                            <th>NAMA</th>
                                            <th>KODE</th>
                                            <th>JENIS</th>
                                            <th>STATUS</th>
                                            <th>DETAIL</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($berita as $item => $i)
                                            <tr>
                                                <td>{{ $item + 1 }}</td>
                                                <td>{{ $i->tanggal }}</td>
                                                <td>{{ $i->nama }}</td>
                                                <td>{{ $i->random_code }}</td>
                                                <td>{{ $i->jenis_berita }}</td>
                                                <td class="text-center">
                                                    @if ($i->is_active === 'AKTIF')
                                                    <span class="badge badge-success">AKTIF</span>
                                                    @else
                                                    <span class="badge badge-danger">NON AKTIF</span>
                                                    @endif
                                                </td>
                                                <td>{{ \Illuminate\Support\Str::limit($i->detail_berita, 25) }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <a href="{{ route('informasi.show', $i->id) }}" class="btn btn-primary btn-circle btn-sm mr-1">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('informasi.edit', $i->id) }}" class="btn btn-warning btn-circle btn-sm mr-1">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <a href="{{ route('informasi.hapus', $i->id) }}"
                                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                                            class="btn btn-danger btn-circle btn-sm">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                        
        <div class="card shadow mb-4 border-bottom-primary">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Background</h6>
            </div>
            <div class="card-body text-center">
                <form action="{{ route('admin.background') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        @if(!empty($background->gambar))
                            <img src="{{ asset('assets/img/informasi/' . $background->gambar) }}" alt="Background"
                                class="img-fluid mt-2 mb-2 mx-auto d-block"
                                style="max-width: 800px;">
                        @endif

                        <input type="file" name="gambar" class="form-control-file mt-2 mx-auto d-block" style="width: fit-content;">
                        
                        <!-- Tombol Simpan -->
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

</div>
@endsection