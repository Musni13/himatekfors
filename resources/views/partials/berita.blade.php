<!-- Events Section -->
<section id="events" class="events section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>informasi</h2>
  <p>INFORMASI</p>
</div>
<!-- End Section Title -->

<img class="slider-bg" src="{{ asset('assets/img/informasi/' . $background->gambar) }}" alt="" data-aos="fade-in">

<div class="container">

  <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
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
        }
      }
    </script>

    <div class="swiper-wrapper">
        @foreach ($berita as $item)
          @if ($item->is_active === 'AKTIF')
          <div class="swiper-slide">
            <div class="row gy-4 event-item">
              <div class="col-lg-6">
                @if ($item->galeriFirst)
                  <img src="{{ asset('assets/img/galeri/' .  $item->galeriFirst->gambar) }}"
                      class="img-fluid"
                      alt="Gambar Galeri">
                @endif
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>{{ $item->nama }}</h3>
                @php
                    $warna = match($item->jenis_berita) {
                        'KEGIATAN' => 'bg-success',
                        'PENGUMUMAN' => 'bg-danger',
                        'BERITA' => 'bg-primary',
                        default => 'bg-secondary'
                    };
                @endphp
                <p>
                  <span class="badge {{ $warna }}">{{ $item->jenis_berita }}</span>
                  <span>{{ \Carbon\Carbon::parse($item->tanggal)->locale('id')->isoFormat('dddd, D MMMM Y') }}</span>
                </p>
                <div class="price"></div>
                  <p style="text-align: justify;">
                  {{ $item->detail_berita }}
                </p>
              </div>
            </div>
          </div>       
<!-- End Slider item -->

          @endif
        @endforeach
    </div>

    <div class="swiper-pagination"></div>
  </div>

</div>

</section>
<!-- /Events Section -->