@extends('admin.layouts.master')

@section('title', 'Backup Database')

@section('content')
<div class="container-fluid">
    <!-- Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800" style="font-weight: bold;">BACKUP DATABASE</h1>
    </div>

    <!-- Card -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('database.store') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-download"></i> Download Database
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
