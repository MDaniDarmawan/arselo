@extends('layouts.main')

@section('title', 'Struktur Tata Usaha - SMPN 10 Jember')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-container">
        <h1>Struktur Tata Usaha</h1>
    </div>
</section>

@include('partials.school-hero')

<!-- Struktur Tata Usaha Content -->
<section class="struktur-content">
    <div class="container-struktur">
        <div class="struktur-card">
            <div class="struktur-image-container">
                <img src="{{ asset('images/struktur-tata-usaha.jpg') }}" alt="Struktur Tata Usaha SMPN 10 Jember" class="struktur-image">
            </div>
        </div>
    </div>
</section>

@endsection
