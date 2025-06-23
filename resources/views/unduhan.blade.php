@extends('layouts.app')

@section('content')
<!-- Book A Table Section -->
<section id="book-a-table" class="book-a-table section">

<!-- Section Title -->
<div class="container section-title mt-3 pt-3" data-aos="fade-up">
  <h2>unduhan</h2>
  <p>UNDUHAN</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

    <ol>
        @foreach ($unduhans as $file)
            <li>
                {{ $file->nama }}
                <a href="{{ route('unduhan.download', ['filename' => $file->nama]) }}"><i class="bi bi-download"></i></a>
            </li>
        @endforeach
</ol>

</div>

</section><!-- /Book A Table Section -->
@endsection