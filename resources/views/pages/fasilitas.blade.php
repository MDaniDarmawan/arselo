@extends('layouts.main')

@section('title', 'Fasilitas - SMPN 10 Jember')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-container">
        <h1>Fasilitas</h1>
    </div>
</section>

@include('partials.school-hero')

<!-- Fasilitas Content -->
<section class="fasilitas-galeri-section">
    <div class="container">
        <div class="fasilitas-galeri-card">
            <div class="fasilitas-galeri-grid">
                <article class="fasilitas-galeri-item">
                    <div class="fasilitas-galeri-image">
                        <img src="{{ asset('images/fasilitas-basket.jpg') }}" alt="Lapangan Basket">
                    </div>
                    <div class="fasilitas-galeri-title">
                        <h3>Lapangan Basket</h3>
                    </div>
                </article>

                <article class="fasilitas-galeri-item">
                    <div class="fasilitas-galeri-image">
                        <img src="{{ asset('images/fasilitas-aula.jpg') }}" alt="Aula">
                    </div>
                    <div class="fasilitas-galeri-title">
                        <h3>Aula</h3>
                    </div>
                </article>

                <article class="fasilitas-galeri-item">
                    <div class="fasilitas-galeri-image">
                        <img src="{{ asset('images/fasilitas-voli.jpg') }}" alt="Lapangan Voli">
                    </div>
                    <div class="fasilitas-galeri-title">
                        <h3>Lapangan Voli</h3>
                    </div>
                </article>

                <article class="fasilitas-galeri-item">
                    <div class="fasilitas-galeri-image">
                        <img src="{{ asset('images/fasilitas-perpustakaan.jpg') }}" alt="Lab Komputer">
                    </div>
                    <div class="fasilitas-galeri-title">
                        <h3>Lab Komputer</h3>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

@endsection
