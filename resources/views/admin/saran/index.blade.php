@extends('admin.layouts.master')
@section('title', 'Saran')
@section('content')
<div class="container-fluid">
 <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800" style="font-weight: bold;">SARAN</h1>
    </div>

    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Data Saran</h6>
                        </div>
                        <div class="card-body border-bottom-primary">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>E-MAIL</th>
                                            <th>SUBJEK</th>
                                            <th>PESAN</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($saran as $item => $i)
                                             <tr class="text-center">
                                                <td>{{ $item + 1 }}</td>
                                                <td>{{ $i->nama }}</td>
                                                <td>{{ $i->email }}</td>
                                                <td>{{ $i->judul }}</td>
                                                <td>{{ $i->pesan }}</td>
                                                <td>
                                                    <div>
                                                        <a href="{{ route('saran.show', $i->id) }}" class="btn btn-primary btn-circle btn-sm mr-1">
                                                            <i class="fas fa-eye"></i>
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