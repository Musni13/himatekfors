<div class="struktur-card mb-4">
  <img src="{{ asset('assets/img/struktur/' . $anggota->gambar) }}" alt="{{ $anggota->nama }}" class="img-fluid mb-3 rounded" style="width: 150px; height: 150px; object-fit: cover; border: 3px solid #ccc;">
  
  <div class="struktur-info">
    <h5 class="mb-1">{{ $anggota->nama }}</h5>
    <p class="mb-0"><strong>NPH:</strong> {{ $anggota->nph }}</p>
  </div>
</div>
