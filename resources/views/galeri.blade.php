@extends('layouts.app')
@section('content')
<!-- Gallery Section -->
<section id="gallery" class="gallery section">

<!-- Section Title -->
<div class="container section-title pt-3 mt-3" data-aos="fade-up">
  <h2>galeri</h2>
  <p>GALERI</p>
</div>
<!-- End Section Title -->

<div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
  <div class="row g-0">
  @foreach ($galeri as $item)
  <div class="col-lg-3 col-md-4">
    <div class="gallery-item">
      <a href="{{ asset('assets/img/galeri/' . $item->gambar) }}" class="glightbox" data-gallery="images-gallery">
        <img src="{{ asset('assets/img/galeri/' . $item->gambar) }}" alt="" class="img-fluid">
      </a>
    </div>
  </div>
<!-- End Gallery Item -->
@endforeach
  </div>
</div>
</section>
<!-- /Gallery Section -->
@endsection