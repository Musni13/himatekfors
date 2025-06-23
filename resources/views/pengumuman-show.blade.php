@extends('layouts.app')

@section('title', "Berita {$pengumuman->nama}")
@section('content')
<!-- About Section -->
<section id="about" class="about section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

<!-- Section Title -->
<div class="container section-title pt-3 mt-3" data-aos="fade-up">
  <h2>pengumuman</h2>
  <p>PENGGUMUMAN</p>
</div><!-- End Section Title -->

  <div>
    <div class="order-1 order-lg-2 text-center">
      @forelse ($pengumuman->galeri as $galeri)
          <img src="{{ asset('assets/img/galeri/' . $galeri->gambar) }}" 
              class="img-fluid about-img mb-2"
              style="max-width: 800px; height: auto;" 
              alt="Gambar Kegiatan">
      @empty
          <p>Tidak ada gambar terkait.</p>
      @endforelse
    </div>
    <br>
    <div class="order-2 order-lg-1 content">
      <h3> {{ ($pengumuman->nama) }}</h3>
      <p style="text-align: justify;">
        {{ ($pengumuman->detail_berita) }}
      </p>
    </div>
  </div>

</div>

</section><!-- /About Section -->
@endsection