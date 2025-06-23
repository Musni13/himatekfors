@extends('layouts.app')

@section('title', 'Visi & Misi')
@section('content')
         <!-- Specials Section -->
 <section id="specials" class="specials section">

<!-- Section Title -->
<div class="container section-title mt-3 pt-3" data-aos="fade-up">
  <h2>tujuan, usaha & sifat</h2>
  <p>Tujuan, Usaha & Sifat</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row">
    <div class="col-lg-3">
      <ul class="nav nav-tabs flex-column">
        @foreach($visi as $index => $item)
          <li class="nav-item">
            <a class="nav-link {{ $loop->first ? 'active show' : '' }}" data-bs-toggle="tab" href="#tab-{{ $index }}">{{ $item->nama }}</a>
          </li>
        @endforeach
      </ul>
    </div>
    <div class="col-lg-9 mt-4 mt-lg-0">
      <div class="tab-content">
        @foreach($visi as $index => $item)
          <div class="tab-pane {{ $loop->first ? 'active show' : '' }}" id="tab-{{ $index }}">
            <div class="row">
              <div class="col-lg-12 details order-2 order-lg-1">
                <h3 class="mb-2">{{ $item->nama }}</h3>
                <p style="text-align: justify;">{{ $item->keterangan }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

</div>

</section><!-- /Specials Section -->
@endsection
