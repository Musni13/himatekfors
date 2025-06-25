<header id="header" class="header fixed-top">

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('beranda') }}" class="logo d-flex align-items-center me-auto me-xl-0">
          
<!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{ asset('assets/img/logo-hima.png') }}" alt="">
          <h1 class="sitename">HIMATEKFORS</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li>
               @php
              $heroRoutes = ['beranda'];
            @endphp
              <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</a></li>
           

            <li class="dropdown">
              @php
                $tentangRoutes = ['visimisi', 'struktur', 'demisioner'];
              @endphp
              <a href="#" class="{{ in_array(Route::currentRouteName(), $tentangRoutes) ? 'active' : '' }}">
                <span>Tentang</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
              </a>
              <ul>
              <li><a href="{{ url('/') }}#about" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">Profil</a></li>
                <li><a href="{{ route('visimisi') }}" class="{{ request()->routeIs('visimisi') ? 'active' : '' }}">Tujuan, Usaha & Sifat</a></li>
                <li><a href="{{ route('struktur') }}" class="{{ request()->routeIs('struktur') ? 'active' : '' }}">Struktur Pengurus</a></li>
                <li><a href="{{ route('demisioner') }}" class="{{ request()->routeIs('demisioner') ? 'active' : '' }}">Demisioner</a></li>
              </ul>
            </li>

            <li class="dropdown">
              @php
                $informasiRoutes = [
                  'berita', 'berita.show',
                  'kegiatan', 'kegiatan.show',
                  'pengumuman', 'pengumuman.show'
                ];
              @endphp
              <a href="#" class="{{ in_array(Route::currentRouteName(), $informasiRoutes) ? 'active' : '' }}">
                <span>Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
              </a>
              <ul>
                <li><a href="{{ route('berita') }}" class="{{ request()->routeIs('berita', 'berita.show') ? 'active' : '' }}">Berita</a></li>
                <li><a href="{{ route('kegiatan') }}" class="{{ request()->routeIs('kegiatan', 'kegiatan.show') ? 'active' : '' }}">Kegiatan</a></li>
                <li><a href="{{ route('pengumuman') }}" class="{{ request()->routeIs('pengumuman', 'pengumuman.show') ? 'active' : '' }}">Pengumuman</a></li>
              </ul>
            </li>

            <li><a href="{{ route('galeri') }}" class="{{ request()->routeIs('galeri') ? 'active' : '' }}">Galeri</a></li>
            <li><a href="{{ route('unduhan') }}" class="{{ request()->routeIs('unduhan') ? 'active' : '' }}">Unduhan</a></li>
            <li><a href="{{ url('/') }}#contact">Kontak</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
  </header>

  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const profilLink = document.querySelector('a[href$="#about"]');
    const aboutSection = document.querySelector('#about');

    window.addEventListener('scroll', function () {
      const scrollPosition = window.scrollY + window.innerHeight / 2;
      const sectionTop = aboutSection.offsetTop;
      const sectionHeight = aboutSection.offsetHeight;

      if (scrollPosition >= sectionTop && scrollPosition <= sectionTop + sectionHeight) {
        profilLink.classList.add('active');
      } else {
        profilLink.classList.remove('active');
      }
    });
  });
</script>
