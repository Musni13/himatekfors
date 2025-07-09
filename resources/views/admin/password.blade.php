@extends('admin.layouts.master')

@section('title', 'Tambah Hero')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Hero</h1>
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

    <form action="{{ route('password.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <!-- Form Input -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Form Ubah Password</h6>
                    </div>
                    <div class="card-body border-bottom-primary">
                        <!-- Nama -->
                        <!-- Password Lama -->
                        <div class="form-group position-relative">
                            <label>Password Lama</label>
                            <input type="password" name="password_lama" class="form-control" id="password_lama">
                            <span toggle="#password_lama" class="fa fa-fw fa-eye field-icon toggle-password" style="position:absolute; right:10px; top:38px; cursor:pointer;"></span>
                        </div>

                        <!-- Password Baru -->
                        <div class="form-group position-relative">
                            <label>Password Baru</label>
                            <input type="password" name="password_baru" class="form-control" id="password_baru">
                            <span toggle="#password_baru" class="fa fa-fw fa-eye field-icon toggle-password" style="position:absolute; right:10px; top:38px; cursor:pointer;"></span>
                        </div>

                        <!-- Konfirmasi Password -->
                        <div class="form-group position-relative">
                            <label>Konfirmasi Password</label>
                            <input type="password" name="konfirmasi_password" class="form-control" id="konfirmasi_password">
                            <span toggle="#konfirmasi_password" class="fa fa-fw fa-eye field-icon toggle-password" style="position:absolute; right:10px; top:38px; cursor:pointer;"></span>
                        </div>

                        <a href="{{ route('hero') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali ke Beranda
                                </a>
                        <!-- Tombol Simpan -->
                        <button type="submit" class="btn btn-primary">Simpan</button>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
 

<!-- Script untuk toggle mata -->
<script>
    document.querySelectorAll('.toggle-password').forEach(function(element) {
        element.addEventListener('click', function () {
            const input = document.querySelector(this.getAttribute('toggle'));
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    });
</script>
@endsection