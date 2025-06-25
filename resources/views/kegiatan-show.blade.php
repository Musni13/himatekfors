@extends('layouts.app')
@section('title', "Berita {$kegiatan->nama}")
@section('content')

<!-- About Section -->
<section id="about" class="about section">
<div class="container" data-aos="fade-up" data-aos-delay="100">

<!-- Section Title -->
<div class="container section-title pt-3" data-aos="fade-up">
  <h2>kegiatan</h2>
  <p>{{ $kegiatan->nama }}</p>
</div>
<!-- End Section Title -->

  <div class="row">
    <div class="col-lg-12 text-center">
      @if ($kegiatan->galeri->count() > 0)

<!-- Swiper Container -->
      <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": 1,
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            }
          }
        </script>

        <div class="swiper-wrapper">
          @foreach ($kegiatan->galeri as $galeri)
            <div class="swiper-slide">
              <img src="{{ asset('assets/img/galeri/' . $galeri->gambar) }}"
                  class="img-fluid mb-2"
                  style="max-width: 500px; height: auto; margin: 0 auto;"
                  alt="Gambar Kegiatan">
            </div>
          @endforeach
        </div>

        <div class="swiper-pagination"></div>
      </div>
      @else
        <p>Tidak Ada Gambar Terkait.</p>
      @endif
    </div>

    <div class="col-lg-12 mt-4 content">
      <p style="text-align: justify;">
        {{ $kegiatan->detail_berita }}
      </p>
    </div>
  </div>
</div>
</section>
@endsection
