@extends('layouts.main')

@section('title', 'Beranda - SMPN 10 Jember')

@section('content')

<!-- Hero Section -->
<section class="hero-section" id="beranda">
    <div class="hero-container">
        <div class="hero-content">
            <h1 class="hero-title">
                <span>Selamat Datang</span>
                <span>di Website</span>
                <span class="hero-title-highlight">SMPN 10 Jember</span>
            </h1>
            <a href="{{ route('tentang-kami') }}" class="btn-primary">Selengkapnya</a>
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/logo-smpn10-large.png') }}" alt="Logo SMPN 10 Jember">
        </div>
    </div>
</section>

<!-- Sambutan Kepala Sekolah -->
<section class="sambutan-section" id="tentang">
    <div class="sambutan-container">
        <div class="sambutan-image">
            <img src="{{ asset('images/kepala-sekolah.png') }}" alt="Kepala Sekolah SMPN 10 Jember">
        </div>
        <div class="sambutan-content">
            <div class="section-line"></div>
            <h2 class="section-title">Sambutan Kepala Sekolah</h2>
            <div class="sambutan-text">
                <p>Assalamu'alaikum Warahmatullahi Wabarokatuh</p>
                <p>Selamat datang di website resmi SMP Negeri 10 Jember. Website ini hadir sebagai jendela informasi lengkap tentang profil sekolah, prestasi, fasilitas, kegiatan ekstrakurikuler, dan program unggulan kami.</p>
                <p>Terima kasih atas kunjungan dan kepercayaan Anda. Semoga informasi yang kami sajikan bermanfaat.</p>
                <p>Wassalamu'alaikum Warahmatullahi Wabarokatuh.</p>
                <p class="sambutan-signature">Kepala Sekolah SMPN 10 Jember<br>Nur Sujayanto, S.Pd</p>
            </div>
        </div>
    </div>
</section>

<!-- Artikel Section -->
@include('partials.beranda-artikel-card')

<!-- Prestasi Siswa Section -->
<section class="prestasi-section">
    <div class="container">
        <div class="section-header">
            <h2>Prestasi Siswa</h2>
            <a href="{{ route('prestasi-siswa') }}" class="link-more">Lihat Selengkapnya...</a>
        </div>
        <div class="prestasi-grid">
            <article class="prestasi-card">
                <img src="{{ asset('images/prestasi-1.jpg') }}" alt="Prestasi 1">
                <div class="prestasi-content">
                    <p class="prestasi-date">16 Februari 2026</p>
                    <h3 class="prestasi-title">Juara 1 Lomba Fashion Tingkat Kabupaten</h3>
                    <div class="prestasi-student">
                        <p>Muyasaro</p>
                        <p>9A</p>
                    </div>
                </div>
            </article>

            <article class="prestasi-card">
                <img src="{{ asset('images/prestasi-2.jpg') }}" alt="Prestasi 2">
                <div class="prestasi-content">
                    <p class="prestasi-date">16 Februari 2026</p>
                    <h3 class="prestasi-title">Juara 2 English Speech Mosaic 2026</h3>
                    <div class="prestasi-student">
                        <p>Kamilka Fahrizal A.</p>
                        <p>9A</p>
                    </div>
                </div>
            </article>

            <article class="prestasi-card">
                <img src="{{ asset('images/prestasi-3.jpg') }}" alt="Prestasi 3">
                <div class="prestasi-content">
                    <p class="prestasi-date">16 Februari 2026</p>
                    <h3 class="prestasi-title">Peraih Medali Perak Matematika Nasional</h3>
                    <div class="prestasi-student">
                        <p>Muyasaro</p>
                        <p>9A</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Ekstrakurikuler Section -->
<section class="ekskul-section">
    <div class="container">
        <div class="section-header">
            <h2>Ekstrakurikuler</h2>
            <a href="{{ route('ekstrakurikuler') }}" class="link-more">Lihat Selengkapnya...</a>
        </div>
        <div class="ekskul-showcase">
            <div class="ekskul-card">
                <img src="{{ asset('images/ekskul-futsal.jpg') }}" alt="Sepak Bola dan Futsal">
                <div class="ekskul-overlay">
                    <h3>Sepak Bola dan Futsal</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fasilitas Section -->
<section class="fasilitas-section">
    <div class="container">
        <div class="section-header">
            <h2>Fasilitas Sekolah</h2>
            <a href="{{ route('fasilitas') }}" class="link-more">Lihat Selengkapnya...</a>
        </div>
        <div class="fasilitas-showcase">
            <div class="fasilitas-card">
                <img src="{{ asset('images/fasilitas-basket.jpg') }}" alt="Lapangan Basket">
                <div class="fasilitas-overlay">
                    <h3>Lapangan Basket</h3>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
