<section id="hero" class="hero section light-background">
  <img src="{{ asset("assets/img/beranda/" . $hero->logo) }}" alt="{{ $hero->nama }}" data-aos="fade-in" class="img-fluid w-100">

  <div class="container">
    <div class="row">
      <div class="col-lg-8 d-flex flex-column align-items-center align-items-lg-start">
        <h2 data-aos="fade-up" data-aos-delay="100">Welcome to <span>{{ $hero->nama }}</span></h2>
        <p data-aos="fade-up" data-aos-delay="200">{{ $hero->slogan }}</p>
      </div>
      <div class="col-lg-4 d-flex align-items-center justify-content-center mt-5 mt-lg-0">
        <a href="{{ ($hero->url_youtube) }}" class="glightbox pulsating-play-btn"></a>
      </div>
    </div>
  </div>
</section>
