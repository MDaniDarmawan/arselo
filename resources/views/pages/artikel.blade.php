@extends('layouts.main')

@section('title', 'Artikel - SMPN 10 Jember')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-container">
        <h1>Artikel</h1>
    </div>
</section>

@include('partials.school-hero')

<!-- Artikel Content -->
<section class="artikel-kesiswaan-section">
    <div class="container">
        <div class="artikel-kesiswaan-card">
            <div class="artikel-kesiswaan-grid">

@foreach($artikels as $artikel)

<article class="artikel-kesiswaan-item">

<img src="{{ asset('images/'.$artikel['gambar']) }}">

<div class="artikel-kesiswaan-content">

<div class="artikel-kesiswaan-meta">

<span class="artikel-kesiswaan-date">

{{ $artikel['tanggal'] }}

</span>

</div>

<h3 class="artikel-kesiswaan-title">

{{ $artikel['judul'] }}

</h3>

<p class="artikel-kesiswaan-excerpt">

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
    </div>
</section>

@endsection
