<!-- Contact Section -->
<section id="contact" class="contact section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
   <h2>kontak</h2>
  <p>KONTAK</p>
</div>
<!-- End Section Title -->

<div class="mb-5" data-aos="fade-up" data-aos-delay="200">
  <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.0855747326227!2d131.30205632719685!3d-0.9829981152827408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d5bf8eb96fb3a69%3A0xe737b481b4814f1e!2sUNIMUDA%20SORONG!5e0!3m2!1sid!2sid!4v1744618904390!5m2!1sid!2sid" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- End Google Maps -->

<div class="container" data-aos="fade-up" data-aos-delay="100">
  <div class="row gy-4">
    <div class="col-lg-4">
      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
        <i class="bi bi-geo-alt flex-shrink-0"></i>
        <div>
          <h3>Alamat</h3>
          <p>Malawele, Kec. Aimas, Kabupaten Sorong, Papua Bar. 98414</p>
        </div>
      </div>
<!-- End Info Item -->

      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
        <i class="bi bi-telephone flex-shrink-0"></i>
        <div>
          <h3>Hubungi</h3>
          <p>+62 852-2489-2730</p>
          <p>+62 821-9888-0960</p>
        </div>
      </div>
<!-- End Info Item -->

      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
        <i class="bi bi-envelope flex-shrink-0"></i>
        <div>
          <h3>Email</h3>
          <p>info@example.com</p>
        </div>
      </div>
<!-- End Info Item -->

    </div>
    <div class="col-lg-8">
    <form action="{{ route('beranda.store') }}" method="POST" data-aos="fade-up" data-aos-delay="200">
      @csrf
      <div class="row gy-4">

        <div class="col-md-6">
          <input type="text" name="nama" class="form-control" placeholder="Nama" required>
        </div>

        <div class="col-md-6">
          <input type="email" name="email" class="form-control" placeholder="E-mail" required>
        </div>

        <div class="col-md-12">
          <input type="text" name="judul" class="form-control" placeholder="Subjek" required>
        </div>

        <div class="col-md-12">
          <textarea name="pesan" class="form-control" rows="6" placeholder="Pesan" required></textarea>
        </div>

        <div class="col-md-12 text-center">
          @if(session('success'))
            <div class="sent-message d-block">{{ session('success') }}</div>
          @endif

          @if($errors->any())
            <div class="error-message d-block">
              {{ $errors->first() }}
            </div>
          @endif

          <div class="loading d-none"></div>

          <button type="submit" class="btn btn-primary" onclick="this.closest('form').querySelector('.loading').classList.remove('d-none')"><i class="bi bi-send"></i> Kirim Pesan</button>
        </div>

      </div>
    </form>
    </div>
<!-- End Contact Form -->
    
  </div>
</div>
</section>
<!-- /Contact Section -->
