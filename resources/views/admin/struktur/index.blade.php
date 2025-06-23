@extends('admin.layouts.master')
@section('title', 'Struktur Pengurus')
@section('content')
<div class="container-fluid">
 <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800" style="font-weight: bold;">STRUKTUR PENGURUS</h1>
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
                            <h6 class="m-0 font-weight-bold text-primary">Data Struktur Pengurus</h6>
                            <a href="{{ route('struktur.create') }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-plus"></i> Tambah Data
                            </a>
                        </div>
                        <div class="card-body border-bottom-primary">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>NPH</th>
                                            <th>JABATAN</th>
                                            <th>DIVISI</th>
                                            <th>PERIODE</th>
                                            <th>GAMBAR</th>
                                            <th>STATUS</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($struktur as $item => $i)
                                            <tr class="text-center">
                                                <td>{{ $item + 1 }}</td>
                                                <td>{{ $i->nama }}</td>
                                                <td>{{ $i->nph }}</td>
                                                <td>{{ $i->jabatan }} ({{ $i->posisi }})</td>
                                                <td>{{ $i->divisi ?? '-' }}</td>
                                                <td>{{ $i->periode }}</td>
                                                <td>{{ $i->gambar }}</td>
                                                <td>
                                                    @if ($i->is_active === 'AKTIF')
                                                    <span class="badge badge-success">AKTIF</span>
                                                    @else
                                                    <span class="badge badge-danger">NON AKTIF</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <a href="{{ route('struktur.show', $i->id) }}" class="btn btn-primary btn-circle btn-sm mr-1">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('struktur.edit', $i->id) }}" class="btn btn-warning btn-circle btn-sm mr-1">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <a href="{{ route('struktur.hapus', $i->id) }}"
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