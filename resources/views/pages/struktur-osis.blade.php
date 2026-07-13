@extends('layouts.main')

@section('title', 'Struktur OSIS - SMPN 10 Jember')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-container">
        <h1>Struktur OSIS</h1>
    </div>
</section>

@include('partials.school-hero')

<!-- Struktur OSIS Content -->
<section class="struktur-osis-section">
    <div class="container">
        <div class="struktur-osis-card">
            <div class="struktur-image-container">
                <img src="{{ asset('images/struktur-osis.jpg') }}" alt="Struktur OSIS" class="struktur-image">
            </div>
        </div>
    </div>
</section>

@endsection
