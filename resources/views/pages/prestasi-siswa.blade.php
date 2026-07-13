@extends('layouts.main')

@section('title', 'Prestasi Siswa - SMPN 10 Jember')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-container">
        <h1>Prestasi Siswa</h1>
    </div>
</section>

@include('partials.school-hero')

<!-- Prestasi Content -->
<section class="prestasi-akademik-section">
    <div class="container">
        <div class="prestasi-akademik-card">
            <div class="prestasi-akademik-grid">
                <article class="prestasi-akademik-item">
                    <img src="{{ asset('images/prestasi-1.jpg') }}" alt="Prestasi 1">
                    <div class="prestasi-akademik-content">
                        <p class="prestasi-akademik-date">16 Februari 2026</p>
                        <h3 class="prestasi-akademik-title">Juara 1 Lomba Fashion Tingkat Kabupaten</h3>
                        <div class="prestasi-akademik-student">
                            <p>Muyasaro</p>
                            <p>9A</p>
                        </div>
                    </div>
                </article>

                <article class="prestasi-akademik-item">
                    <img src="{{ asset('images/prestasi-2.jpg') }}" alt="Prestasi 2">
                    <div class="prestasi-akademik-content">
                        <p class="prestasi-akademik-date">16 Februari 2026</p>
                        <h3 class="prestasi-akademik-title">Juara 2 English Speech Mosaic 2026</h3>
                        <div class="prestasi-akademik-student">
                            <p>Kamilka Fahrizal A.</p>
                            <p>9A</p>
                        </div>
                    </div>
                </article>

                <article class="prestasi-akademik-item">
                    <img src="{{ asset('images/prestasi-3.jpg') }}" alt="Prestasi 3">
                    <div class="prestasi-akademik-content">
                        <p class="prestasi-akademik-date">16 Februari 2026</p>
                        <h3 class="prestasi-akademik-title">Peraih Medali Perak Matematika Nasional</h3>
                        <div class="prestasi-akademik-student">
                            <p>Muyasaro</p>
                            <p>9A</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

@endsection
