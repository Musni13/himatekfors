@extends('layouts.app')
@section('title', 'Struktur Organisasi')
@section('content')
<section id="struktur" class="menu section">
  <div class="container section-title mt-3 pt-3" data-aos="fade-up">
    <h2>struktur pengurus</h2>
    <p>STRUKTUR PENGURUS</p>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="200">

{{-- Pimpinan --}}
    @if($kelompok['PIMPINAN']->count())
    <div class="text-center mb-5">
      <h4>PIMPINAN</h4>
      @foreach($kelompok['PIMPINAN'] as $item)
        @include('_card', ['anggota' => $item])
      @endforeach
    </div>
    @endif

{{-- Bendahara & Sekretaris --}}
    <div class="row justify-content-center mb-5">
    @foreach($kelompok['SEKRETARIS'] as $item)
        <div class="col-md-4 text-center">
        <h4>SEKRETARIS</h4>
          @include('_card', ['anggota' => $item])
        </div>
      @endforeach
      @foreach($kelompok['BENDAHARA'] as $item)
        <div class="col-md-4 text-center">
        <h4>BENDAHARA</h4>
          @include('_card', ['anggota' => $item])
        </div>
      @endforeach
    </div>

{{-- Struktur Per Divisi Berdasarkan Posisi --}}
@foreach($divisiData as $div)
  @if($div['pimpinan']->count())
    <div class="text-center mb-3">
      <h4>PIMPINAN DIVISI {{ $div['divisi'] }}</h4>
    </div>
    <div class="row justify-content-center mb-3">
      @foreach($div['pimpinan'] as $item)
        <div class="col-md-3 text-center">
          @include('_card', ['anggota' => $item])
        </div>
      @endforeach
    </div>
  @endif

  @if($div['anggota']->count())
    <div class="text-center mb-2">
      <h5>ANGGOTA DIVISI {{ $div['divisi'] }}</h5>
    </div>
    <div class="row justify-content-center mb-5">
      @foreach($div['anggota'] as $item)
        <div class="col-md-3 text-center">
          @include('_card', ['anggota' => $item])
        </div>
      @endforeach
    </div>
  @endif
@endforeach
  </div>
</section>
@endsection
