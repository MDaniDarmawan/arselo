@extends('layouts.main')

@section('title', 'Struktur Organisasi - SMPN 10 Jember')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-container">
        <h1>Struktur Organisasi</h1>
    </div>
</section>

@include('partials.school-hero')

<!-- Struktur Organisasi Content -->
<section class="struktur-content">
    <div class="container-struktur">
        <div class="struktur-card">
            <div class="struktur-image-container">
                <img src="{{ asset('images/struktur-organisasi.jpg') }}" alt="Struktur Organisasi SMPN 10 Jember" class="struktur-image">
            </div>
        </div>
    </div>
</section>

@endsection
