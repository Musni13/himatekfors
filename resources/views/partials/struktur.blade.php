<!-- Why Us Section -->
<section id="why-us" class="why-us section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>struktur penggurus</h2>
  <p>STRUKTUR PENGGURUS</p>
</div>
<!-- End Section Title -->

<div class="container">
  <div class="row gy-4">

  @php
      $kiri = $struktur->firstWhere('posisi', 1);
      $tengah = $struktur->firstWhere('posisi', 2);
      $kanan = $struktur->firstWhere('posisi', 3);
  @endphp

  <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100"> 
  @if($kiri)
    <div class="card-item">
      <img src="{{ asset('assets/img/struktur/' . $kiri->gambar) }}" class="img-fluid w-100" alt="Gambar Card">
      
      <h4 class="text-center mt-3 mb-2">
        <a href="" class="stretched-link">{{ ($kiri->jabatan) }}</a>
      </h4>
      
      <p class="text-center">{{ ($kiri->nama) }}</p>
    </div>
    @endif
  </div>
<!-- Card Item -->

  <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
  @if($tengah) 
    <div class="card-item">
      <img src="{{ asset('assets/img/struktur/' . $tengah->gambar) }}" class="img-fluid w-100" alt="Gambar Card">
      
      <h4 class="text-center mt-3 mb-2">
        <a href="" class="stretched-link">{{ ($tengah->jabatan) }}</a>
      </h4>
      
      <p class="text-center">{{ ($tengah->nama) }}</p>
    </div>
    @endif
  </div>
<!-- Card Item -->

  <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100"> 
  @if($kanan)
    <div class="card-item">
      <img src="{{ asset('assets/img/struktur/' . $kanan->gambar) }}" class="img-fluid w-100" alt="Gambar Card">
      
      <h4 class="text-center mt-3 mb-2">
        <a href="" class="stretched-link">{{ ($kanan->jabatan) }}</a>
      </h4>
      
      <p class="text-center">{{ ($kanan->nama) }}</p>
    </div>
    @endif
  </div>
<!-- Card Item -->

  </div>
</div>
</section>
<!-- /Why Us Section -->