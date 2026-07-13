@extends('layouts.main')

@section('title', 'Kontak Kami - SMPN 10 Jember')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-container">
        <h1>Kontak Kami</h1>
    </div>
</section>

@include('partials.school-hero')

<!-- Kontak Content -->
<section class="kontak-section">
    <div class="container">
        <div class="kontak-wrapper">
            <!-- Kontak Info Card -->
            <div class="kontak-info-card">
                <div class="kontak-banner">
                    <div class="kontak-banner-content">
                        <p>Untuk Informasi lebih lanjut mengenai SMP Negeri 10 Jember, Hubungi Kami Melalui Nomor di bawah ini</p>
                        <h2>081249165115</h2>
                    </div>
                </div>
            </div>

            <!-- Lokasi Card -->
            <div class="kontak-lokasi-card">
                <h3 class="kontak-lokasi-title">Lokasi Kami</h3>
                <div class="kontak-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.3825598894666!2d113.69737831478246!3d-8.166573994186668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b617a81ecf%3A0x6f20a427d6dc140c!2sSMP%20Negeri%2010%20Jember!5e0!3m2!1sid!2sid!4v1234567890123!5m2!1sid!2sid"
                        width="100%"
                        height="350"
                        style="border:0; border-radius: 10px;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
