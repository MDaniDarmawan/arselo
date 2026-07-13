@extends('layouts.main')

@section('title', 'Kegiatan Sekolah - SMPN 10 Jember')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-container">
        <h1>Kegiatan Sekolah</h1>
    </div>
</section>

@include('partials.school-hero')

<!-- Kegiatan Content -->
<section class="kegiatan-section">
    <div class="container">
        <div class="kegiatan-card">
            <div class="kegiatan-grid">
                <article class="kegiatan-item">
                    <img src="{{ asset('images/kegiatan-1.jpg') }}" alt="Praktikum Tata Boga">
                    <div class="kegiatan-title">
                        <h3>Praktikum Tata Boga</h3>
                    </div>
                    <a href="{{ url('/detail-kegiatan/1') }}" class="kegiatan-overlay">Lihat Detail</a>
                </article>

                <article class="kegiatan-item">
                    <img src="{{ asset('images/kegiatan-2.jpg') }}" alt="Pramuka">
                    <div class="kegiatan-title">
                        <h3>Pramuka</h3>
                    </div>
                    <a href="{{ url('/detail-kegiatan/2') }}" class="kegiatan-overlay">Lihat Detail</a>
                </article>

                <article class="kegiatan-item">
                    <img src="{{ asset('images/kegiatan-3.jpg') }}" alt="Lepas Pisah">
                    <div class="kegiatan-title">
                        <h3>Lepas Pisah</h3>
                    </div>
                    <a href="{{ url('/detail-kegiatan/3') }}" class="kegiatan-overlay">Lihat Detail</a>
                </article>
            </div>
        </div>
    </div>
</section>

@endsection
