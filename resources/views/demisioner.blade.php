@extends('layouts.app')
@section('content')

<!-- Chefs Section -->
    <section id="chefs" class="chefs section">

<!-- Section Title -->
      <div class="container section-title mt-3 pt-3" data-aos="fade-up">
        <h2>demisioner</h2>
        <p>DEMISIONER</p>
      </div>
<!-- End Section Title -->

      <div class="container">
        <div class="row gy-4">
          @foreach($demisioners as $item)
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <h4 class="mb-0">PIMPINAN</h4>
              <span class="d-block mb-2">Periode {{ $item->periode }}</span>
              <img src="{{ asset('assets/img/demisioner/' . $item->gambar) }}" class="img-fluid" alt="{{ $item->nama }}">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>{{ $item->nama }}</h4>
                  <span>12651626216</span>
                </div>
                <div class="social">
                  @if($item->twitter)
                    <a href="{{ $item->twitter }}" target="_blank"><i class="bi bi-twitter-x"></i></a>
                  @endif
                  @if($item->facebook)
                    <a href="{{ $item->facebook }}" target="_blank"><i class="bi bi-facebook"></i></a>
                  @endif
                  @if($item->instagram)
                    <a href="https://www.instagram.com/{{ $item->instagram }}/" target="_blank"><i class="bi bi-instagram"></i></a>
                  @endif
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
</section>
<!-- /Chefs Section -->
@endsection