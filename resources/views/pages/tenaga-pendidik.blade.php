@extends('layouts.main')

@section('title', 'Tenaga Pendidik - SMPN 10 Jember')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-container">
        <h1>Tenaga Pendidik</h1>
    </div>
</section>

@include('partials.school-hero')

<!-- Tenaga Pendidik Content -->
<section class="tenaga-pendidik-section">
    <div class="container">
        <div class="tenaga-pendidik-card">
            <div class="tenaga-pendidik-grid">
                <!-- Kepala Sekolah -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-1.jpg') }}" alt="Kepala Sekolah">
                    <div class="teacher-info">
                        <h3>Guru IPA</h3>
                        <p>Dr. Soesy Sri Wulandari, M. Pd</p>
                    </div>
                </article>

                <!-- Wakil Kepala Sekolah -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-2.jpg') }}" alt="Wakil Kepala Sekolah">
                    <div class="teacher-info">
                        <h3>Guru IPS</h3>
                        <p>Nuryadi,S.Pd.</p>
                    </div>
                </article>

                <!-- Guru PKN -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-3.jpg') }}" alt="Guru PKN">
                    <div class="teacher-info">
                        <h3>Guru IPA</h3>
                        <p>Dwi Murwati, S.Pd</p>
                    </div>
                </article>

                <!-- Guru Prakarya -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-4.jpg') }}" alt="Guru Prakarya">
                    <div class="teacher-info">
                        <h3>Guru IPA</h3>
                        <p>Drs. H. Adam Suwoto, S.Pd</p>
                    </div>
                </article>

                <!-- Guru -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-5.jpg') }}" alt="Guru">
                    <div class="teacher-info">
                        <h3>Guru Bahasa Daerah</h3>
                        <p>Suryani, S.Pd</p>
                    </div>
                </article>

                <!-- Guru -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-6.jpg') }}" alt="Guru">
                    <div class="teacher-info">
                        <h3>Guru Bahasa Daerah</h3>
                        <p>Yuna Irasari, S.Pd</p>
                    </div>
                </article>

                <!-- Guru PKN -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-7.jpg') }}" alt="Guru PKN">
                    <div class="teacher-info">
                        <h3>Guru Seni Budaya dan Keterampilan</h3>
                        <p>Endang Sri Rejeki, S.Pd</p>
                    </div>
                </article>

                <!-- Guru SBK -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-8.jpg') }}" alt="Guru SBK">
                    <div class="teacher-info">
                        <h3>Guru Matematika</h3>
                        <p>Eny Zubaidah W., S.Pd</p>
                    </div>
                </article>

                <!-- Guru SBK -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-9.jpg') }}" alt="Guru SBK">
                    <div class="teacher-info">
                        <h3>Guru PJOK</h3>
                        <p>Hadi Purwanto, S.Pd.</p>
                    </div>
                </article>

                <!-- Guru -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-10.jpg') }}" alt="Guru">
                    <div class="teacher-info">
                        <h3>Guru Bahasa Indonesia</h3>
                        <p>Yuni Winarsih, S.Pd</p>
                    </div>
                </article>

                <!-- Guru -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-11.jpg') }}" alt="Guru">
                    <div class="teacher-info">
                        <h3>Guru Bimbingan Konseling</h3>
                        <p>Reny Pratitie, S.Pd</p>
                    </div>
                </article>

                <!-- Guru Olahraga -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-12.jpg') }}" alt="Guru Olahraga">
                    <div class="teacher-info">
                        <h3>Guru IPA</h3>
                        <p>Dra. Ida Rosyidah</p>
                    </div>
                </article>

                <!-- Guru Agama -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-13.jpg') }}" alt="Guru Agama">
                    <div class="teacher-info">
                        <h3>Guru Bahasa Inggris</h3>
                        <p>Rika Fajar Rahmawati, S.Pd.</p>
                    </div>
                </article>

                <!-- Guru Agama -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-14.jpg') }}" alt="Guru Agama">
                    <div class="teacher-info">
                        <h3>Guru Bimbingan Konseling</h3>
                        <p>Mohammad Sigit Pramono, S.Sos</p>
                    </div>
                </article>

                <!-- Guru Agama -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-15.jpg') }}" alt="Guru Agama">
                    <div class="teacher-info">
                        <h3>Guru IPS</h3>
                        <p>SITI ARUMI, S.Pd</p>
                    </div>
                </article>

                <!-- Guru -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-16.jpg') }}" alt="Guru">
                    <div class="teacher-info">
                        <h3>Guru Bahasa Inggris</h3>
                        <p>Nikmatus sholikhah, S.Pd.</p>
                    </div>
                </article>

                <!-- Guru -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-17.jpg') }}" alt="Guru">
                    <div class="teacher-info">
                        <h3>Guru IPA</h3>
                        <p>Zainur Rohmat Edy Prasetyo, S.Pd</p>
                    </div>
                </article>

                <!-- Guru -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-18.jpg') }}" alt="Guru">
                    <div class="teacher-info">
                        <h3>Guru Matematika</h3>
                        <p>Dwi Indrawati Pertiwi, S.Pd</p>
                    </div>
                </article>

                <!-- Guru -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-19.jpg') }}" alt="Guru">
                    <div class="teacher-info">
                        <h3>Guru Bimbingan Konseling</h3>
                        <p>Ari Setio Budi Utomo, S.Pd</p>
                    </div>
                </article>

                <!-- Guru BK -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-20.jpg') }}" alt="Guru BK">
                    <div class="teacher-info">
                        <h3>Guru PJOK</h3>
                        <p>Lutfi Riandari, S.Pd</p>
                    </div>
                </article>

                <!-- Guru Matematika -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-21.jpg') }}" alt="Guru Matematika">
                    <div class="teacher-info">
                        <h3>Guru PPKN</h3>
                        <p>Dra.Suryatik</p>
                    </div>
                </article>

                <!-- Guru -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-22.jpg') }}" alt="Guru">
                    <div class="teacher-info">
                        <h3>Guru Prakarya</h3>
                        <p>Dewi Pithaloka Danu Syah Putri, S. E</p>
                    </div>
                </article>

                <!-- Guru -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-23.jpg') }}" alt="Guru">
                    <div class="teacher-info">
                        <h3>Guru IPA</h3>
                        <p>Sisilia Yuliantiyas, S. Pd</p>
                    </div>
                </article>

                <!-- Guru -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-24.jpg') }}" alt="Guru">
                    <div class="teacher-info">
                        <h3>Guru Bahasa Inggris</h3>
                        <p>Dendik Feriandi Sutikno, S.Pd</p>
                    </div>
                </article>

                <!-- Guru Bahasa Jawa -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-25.jpg') }}" alt="Guru Bahasa Jawa">
                    <div class="teacher-info">
                        <h3>Guru IPS</h3>
                        <p>Eni Susilowati, S.Pd</p>
                    </div>
                </article>

                <!-- Guru IPA -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-26.jpg') }}" alt="Guru IPA">
                    <div class="teacher-info">
                        <h3>Guru Matematika</h3>
                        <p>Hasim Asari, S.Pd</p>
                    </div>
                </article>

                <!-- Guru -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-27.jpg') }}" alt="Guru">
                    <div class="teacher-info">
                        <h3>Guru PPKN</h3>
                        <p>Adinda Citra Veronica, S. H</p>
                    </div>
                </article>

                <!-- Guru -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-28.jpg') }}" alt="Guru">
                    <div class="teacher-info">
                        <h3>Guru Bahasa Indonesia</h3>
                        <p>Nur Agustina, S.Pd</p>
                    </div>
                </article>

                <!-- Guru -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-29.jpg') }}" alt="Guru">
                    <div class="teacher-info">
                        <h3>Guru Bahasa Inggris</h3>
                        <p>Choirul Mulianingsih, S.Pd</p>
                    </div>
                </article>

                <!-- Guru BK -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-30.jpg') }}" alt="Guru BK">
                    <div class="teacher-info">
                        <h3>Guru IPS</h3>
                        <p>Chafi Insanuar, S.Pd</p>
                    </div>
                </article>

                <!-- Guru -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-31.jpg') }}" alt="Guru">
                    <div class="teacher-info">
                        <h3>Guru PABPBTA</h3>
                        <p>Yusuf Wahyu Suswanto, S.Pd.I</p>
                    </div>
                </article>

                <!-- Guru Matematika -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-32.jpg') }}" alt="Guru Matematika">
                    <div class="teacher-info">
                        <h3>Guru Bahasa Inggris</h3>
                        <p>Endah Sugi Pratiwi, S.Pd</p>
                    </div>
                </article>

                <!-- Guru Bahasa Jawa -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-33.jpg') }}" alt="Guru Bahasa Jawa">
                    <div class="teacher-info">
                        <h3>Guru Seni Budaya dan Keterampilan</h3>
                        <p>Adam Alfarisyi, S.Pd</p>
                    </div>
                </article>

                <!-- Guru Bahasa Indonesia -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-34.jpg') }}" alt="Guru Bahasa Indonesia">
                    <div class="teacher-info">
                        <h3>Guru Matematika</h3>
                        <p>Adilla Faulina, S.Pd</p>
                    </div>
                </article>

                <!-- Guru -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-35.jpg') }}" alt="Guru">
                    <div class="teacher-info">
                        <h3>Guru PABPBTA</h3>
                        <p>Aditya Cindi Pratiwi, S.Pd.I</p>
                    </div>
                </article>

                <!-- Guru Bahasa Indonesia -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-36.jpg') }}" alt="Guru Bahasa Indonesia">
                    <div class="teacher-info">
                        <h3>Guru Bahasa Indonesia</h3>
                        <p>Vidha Oktoaviani Putri, S.Pd</p>
                    </div>
                </article>

                <!-- Guru Bahasa Indonesia -->
                <article class="teacher-card">
                    <img src="{{ asset('images/guru-37.jpg') }}" alt="Guru Bahasa Indonesia">
                    <div class="teacher-info">
                        <h3>Guru IPA</h3>
                        <p>Karina Lakmiari, S. Pd</p>
                    </div>
                </article>

            </div>
        </div>
    </div>
</section>

@endsection
