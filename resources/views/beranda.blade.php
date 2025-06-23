@extends('layouts.app')

@section('title', 'Beranda')
@section('content')
        @include('partials.hero')
        @include('partials.profil')
        @include('partials.struktur')
        @include('partials.berita')
        @include('partials.galeri')
        @include('partials.contact')
@endsection
