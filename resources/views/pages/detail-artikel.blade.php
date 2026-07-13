@extends('layouts.main')

@section('title', 'Detail Artikel - SMPN 10 Jember')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-container">
        <h1>Detail Artikel</h1>
    </div>
</section>

@include('partials.school-hero')

<!-- Detail Artikel Content -->
<section class="detail-artikel-section">
    <div class="container">
        <div class="detail-artikel-card">
            <article class="detail-artikel-content">

                <!-- Gambar -->
                <div class="detail-artikel-image">
                    <img src="{{ asset('images/' . $artikel['gambar']) }}"
                         alt="{{ $artikel['judul'] }}">
                </div>

                <!-- Isi -->
                <div class="detail-artikel-body">

                    <h2 class="detail-artikel-title">
                        {{ $artikel['judul'] }}
                    </h2>

                    <p class="detail-artikel-date">
                        {{ $artikel['tanggal'] }}
                    </p>

                    <div class="detail-artikel-text">
                        @foreach($artikel['isi'] as $paragraf)
                            <p>{{ $paragraf }}</p>
                        @endforeach
                    </div>

                    <a href="{{ route('artikel') }}" class="btn-back-artikel">
                        Kembali ke Artikel
                    </a>

                </div>

            </article>
        </div>
    </div>
</section>