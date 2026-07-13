@extends('layouts.main')

@section('title', 'Detail Foto Kegiatan - SMPN 10 Jember')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-container">
        <h1>Detail Foto Kegiatan</h1>
    </div>
</section>

@include('partials.school-hero')

<!-- Detail Kegiatan Content -->
<section class="detail-kegiatan-section">
    <div class="container">
        <div class="detail-kegiatan-card">
            <article class="detail-kegiatan-content">
                <h2 class="detail-kegiatan-title">Praktikum Tata Boga</h2>
                <div class="detail-kegiatan-image">
                    <img src="{{ asset('images/kegiatan-1.jpg') }}" alt="Praktikum Tata Boga">
                </div>
                <a href="{{ url('/kegiatan-sekolah') }}" class="btn-back-kegiatan">Kembali ke Kegiatan Sekolah</a>
            </article>
        </div>
    </div>
</section>

@endsection
