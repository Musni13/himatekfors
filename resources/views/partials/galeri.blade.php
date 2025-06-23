<!-- Gallery Section -->
<section id="gallery" class="gallery section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>galeri</h2>
  <p>GALERI</p>
</div><!-- End Section Title -->

<div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

  <div class="row g-0">

  @foreach ($galeri as $galeri)
  <div class="col-lg-3 col-md-4">
    <div class="gallery-item">
      <a href="{{ asset('assets/template/img/' . $galeri->gambar) }}" class="glightbox" data-gallery="images-gallery">
        <img src="{{ asset('assets/template/img/' . $galeri->gambar) }}" alt="" class="img-fluid">
      </a>
    </div>
  </div><!-- End Gallery Item -->
@endforeach

  </div>

</div>

</section><!-- /Gallery Section -->