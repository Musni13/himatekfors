<!-- About Section -->
<section id="about" class="about section" style="background-image: url('{{ asset('assets/img/profil/' . $profil->gambar_belakang) }}')">

<div class="container" data-aos="fade-up" data-aos-delay="100">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>profil</h2>
  <p>PROFIL</p>
</div>
<!-- End Section Title -->

  <div class="row gy-4">
    <div class="col-lg-6 order-1 order-lg-2">
      <img src="{{ asset('assets/img/profil/' . $profil->gambar_depan) }}" class="img-fluid about-img" alt="">
    </div>
    <div class="col-lg-6 order-2 order-lg-1 content">
      <p style="text-align: justify;">
        {{ ($profil->nama) }}
      </p>
    </div>
  </div>

</div>
</section>
<!-- /About Section -->