@extends('layouts.app')
@section('content')

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

<!-- Section Title -->
<div class="container section-title pt-3 mt-3" data-aos="fade-up">
  <h2>berita</h2>
  <p>BERITA</p>
</div>
<!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">
  <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
    <script type="application/json" class="swiper-config">
      {
        "loop": true,
        "speed": 600,
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": "auto",
        "pagination": {
          "el": ".swiper-pagination",
          "type": "bullets",
          "clickable": true
        },
        "breakpoints": {
          "320": {
            "slidesPerView": 1,
            "spaceBetween": 40
          },
          "1200": {
            "slidesPerView": 3,
            "spaceBetween": 20
          }
        }
      }
    </script>
    <div class="swiper-wrapper">
      @foreach($berita as $item)
        <div class="swiper-slide">
          <div class="testimonial-item">
              <p>
                  @if ($item->galeriFirst)
                    <img src="{{ asset('assets/img/galeri/' . $item->galeriFirst->gambar) }}"
                        class="img-zoomin img-fluid rounded-top w-100"
                        alt="Gambar Berita">
                  @endif
              </p>
              <p class="berita-detail-box">
              </p>
              <h6 class="pb-5 mb-1">
                <a href="{{ route('berita.show', $item->id) }}">
                    {{ Str::limit($item->detail_berita, 50) }}
                </a>
                <br>
                  <span style="font-size: 10px">
                    {{ $item->nama }} |
                  {{ \Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('HH:mm') }}
                  {{ \Carbon\Carbon::parse($item->tanggal)->locale('id')->isoFormat('dddd, D MMMM Y') }}
                  </span>
              </h6>
          </div>
        </div>
<!-- End testimonial item -->
      @endforeach
    </div>
    <div class="swiper-pagination"></div>
  </div>

</div>

</section>
<!-- /Testimonials Section -->
@endsection