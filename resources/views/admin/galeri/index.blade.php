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

    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Data Galeri</h6>
                            <a href="{{ route('galeri.create') }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-plus"></i> Tambah Data
                            </a>
                        </div>
                        <div class="card-body border-bottom-primary">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>NO</th>
                                            <th>NAMA GAMBAR</th>
                                            <th>KODE</th>
                                            <th>STATUS</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($galeri as $item => $i)
                                            <tr class="text-center">
                                                <td>{{ $item + 1 }}</td>
                                                <td>{{ $i->gambar }}</td>
                                                <td>{{ $i->code }}</td>
                                                <td>
                                                    @if ($i->is_active === 'AKTIF')
                                                    <span class="badge badge-success">AKTIF</span>
                                                    @else
                                                    <span class="badge badge-danger">NON AKTIF</span>
                                                    @endif
                                                </td>
                                                <td>
                                                     <div class="d-flex justify-content-center align-items-center">
                                                        <a href="{{ route('galeri.show', $i->id) }}" class="btn btn-primary btn-circle btn-sm mr-1">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('galeri.edit', $i->id) }}" class="btn btn-warning btn-circle btn-sm mr-1">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <a href="{{ route('galeri.hapus', $i->id) }}"
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

                </div>
@endsection