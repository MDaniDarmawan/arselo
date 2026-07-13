<section class="artikel-section">

<div class="container">

<div class="section-header">

<h2>Artikel</h2>

<a href="{{ route('artikel') }}" class="link-more">

Lihat Selengkapnya...

</a>

</div>

<div class="artikel-grid">

@foreach($artikels as $artikel)

<article class="artikel-card">

<img src="{{ asset('images/'.$artikel['gambar']) }}">

<div class="artikel-content">

<div class="artikel-meta">

<span class="artikel-date">

{{ $artikel['tanggal'] }}

</span>

</div>

<h3 class="artikel-title">

{{ $artikel['judul'] }}

</h3>

<p class="artikel-excerpt">

{{ $artikel['isi'][0] }}

</p>

<a
href="{{ route('detail-artikel',$artikel['id']) }}"
class="artikel-read-more">

Baca Selengkapnya

</a>

</div>

</article>

@endforeach

</div>

</div>

</section>