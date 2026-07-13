@extends('layouts.main')

@section('title', 'Ekstrakurikuler - SMPN 10 Jember')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-container">
        <h1>Ekstrakurikuler</h1>
    </div>
</section>

@include('partials.school-hero')

<!-- Ekstrakurikuler Content -->
<section class="ekstrakurikuler-section">
    <div class="container">
        <div class="ekstrakurikuler-card">
            <div class="ekstrakurikuler-list">
                <!-- Bola Basket -->
                <article class="ekskul-item">
                    <img src="{{ asset('images/ekskul-basket.jpg') }}" alt="Bola Basket">
                    <div class="ekskul-content">
                        <h3>Bola Basket</h3>
                        <p>Ekstrakurikuler Bola Basket ini bertujuan untuk menampung siswa/siswi yang berbakat di bidang olahraga basket, sehingga siswa/siswi dapat mengembangkan bakatnya dengan baik. Drs. Suwoto Ivan menjabat sebagai Pembina di ekstrakurikuler bola basket ini. Jadwal latihan bola basket ini dilakukan setiap hari rabu dan sabtu pada pukul 15.00-17.00 WIB. Pada tahun ajaran 2007/2008, Ekstrakurikuler Bola Basket ini menorehkan prestasi dengan berhasil menyabet juara 3 lomba basket smp tingkat kabupaten.</p>
                    </div>
                </article>

                <!-- Sepakbola dan Futsal -->
                <article class="ekskul-item">
                    <img src="{{ asset('images/ekskul-futsal.jpg') }}" alt="Sepakbola dan Futsal">
                    <div class="ekskul-content">
                        <h3>Sepakbola dan Futsal</h3>
                        <p>Untuk siswa/siswi SMPN 10 Jember yang berbakat dibidang olahraga sepakbola dan futsal bisa bergabung di Ekstrakurikuler Sepakbola dan Futsal. Pembina di ekstrakurikuler ini adalah Akhmad Haini dan Eko Budijo, S.Pd. Untuk sepakbola pembinanya adalah Bapak Akhmad Haini sedangkan Futsal dibina oleh Bapak Eko Budijo, S.Pd. Latihan Sepakbola dan Futsal dilakukan setiap hari minggu pagi yaitu pada pukul 07.00-09.00 WIB. Prestasi yang dicapai oleh ekstrakurikuler ini sangat baik. Pada periode 2007-2008, Tim futsal SMPN 10 Jember berhasil menyabet juara 3 lomba futsal smp tingkat kabupaten. Dan pada periode 2008-2009 Tim futsal SMPN 10 Jember meningkatkan prestasinya dengan berhasil meraih juara 1 lomba futsal smp tingkat kabupaten.</p>
                    </div>
                </article>

                <!-- Sepak Takraw -->
                <article class="ekskul-item">
                    <img src="{{ asset('images/ekskul-takraw.jpg') }}" alt="Sepak Takraw">
                    <div class="ekskul-content">
                        <h3>Sepak Takraw</h3>
                        <p>Ektrakurikuler ini dibina oleh Ibu Lilis Yuna W. Ekstrakurikuler ini diadakan untuk menampung bakat siswa/siswi SMPN 10 Jember yang berbakat dalam cabang olahraga sepak takraw. Pada tahun ajaran 2007/2008, tim sepak takraw ini berhasil meraih juara 2 Tingkat Propinsi.</p>
                    </div>
                </article>

                <!-- Bola Volly -->
                <article class="ekskul-item">
                    <img src="{{ asset('images/ekskul-volley.jpg') }}" alt="Bola Volly">
                    <div class="ekskul-content">
                        <h3>Bola Volly</h3>
                        <p>Pembina Ekstrakurikuler ini dibina oleh Erwandi , S.Pd dan Hadi Purwanto ST. Jadwal latihan bola volly ini dilakukan setiap hari kamis pada pukul 10.00-17.00 WIB.Berkat latihan yang ekstra keras ini, Tim volley SMPN 10 Jember pernah menyabet juara 3 tingkat Nasional.Ini berarti bahwa ekstrakurikuler ini sukses menampung bakat-bakat volley siswa/siswi SMPN 10 Jember.</p>
                    </div>
                </article>

                <!-- Tenis Meja -->
                <article class="ekskul-item">
                    <img src="{{ asset('images/ekskul-tenis.jpg') }}" alt="Tenis Meja">
                    <div class="ekskul-content">
                        <h3>Tenis Meja</h3>
                        <p>Ekstrakurikuler ini adalah kegiatan yang bertujuan menampung bakat siswa/siswi yang berminat dicabang olahraga tennis meja. Kegiatan ini dibina oleh M. Rozim, M.PdI. Prestasi yang diraih oleh tim tennis meja ini sangat membanggakan, karena tim tennis meja ini pernah meraih juara 3 OSN Tennis Meja tingkat Nasional. Kegiatan ini dijadwalkan setiap hari rabu pada pukul 15.00-17.00 WIB.</p>
                    </div>
                </article>

                <!-- Pencak Silat -->
                <article class="ekskul-item">
                    <img src="{{ asset('images/ekskul-silat.jpg') }}" alt="Pencak Silat">
                    <div class="ekskul-content">
                        <h3>Pencak Silat</h3>
                        <p>Pembina pencak silat ini adalah Dwi Murwati S.Pd. Kegiatan ini bertujuan untuk membekali siswa/siswi dalam hal perlindungan diri. Dari kegiatan pencak silat ini diharapkan siswa/siswi dapat melindungi dirinya sendiri.Kegiatan ini dijadwalkan setiap hari senin pada pukul 14.00-17.00 WIB. Pencak silat ini berhasil meraih lomba pencak silat tingkat kabupaten, tak tanggung-tanggung yaitu sebagai juara 1.</p>
                    </div>
                </article>

                <!-- Pramuka dan PMR -->
                <article class="ekskul-item">
                    <img src="{{ asset('images/ekskul-pramuka.jpg') }}" alt="Pramuka dan PMR">
                    <div class="ekskul-content">
                        <h3>Pramuka dan PMR</h3>
                        <p>Kegiatan ekstrakurikuler pramuka ini ditujukan untuk menampung bakat petualang yang dimiliki oleh siswa/siswi SMPN 10 Jember, sedangkan PMR bertujuan untuk menampung minat siswa/siswi dibidang kesehatan. Sehingga diharapkan akan terbentuk kader-kader muda yang mengerti akan kesehatan. Kegiatan ini dibina oleh Djoko Winadi, S.Pd. Kegiatan ini dijadwalkan setiap hari sabtu pada pukul 12.00-14.00 WIB.</p>
                    </div>
                </article>

                <!-- TPA -->
                <article class="ekskul-item">
                    <img src="{{ asset('images/ekskul-tpa.jpg') }}" alt="TPA">
                    <div class="ekskul-content">
                        <h3>TPA</h3>
                        <p>Kegiatan ini dibina oleh Dra. Madiun, dan dijadwalkan setiap hari kamis pada pukul 13.30-14.30 WIB.</p>
                    </div>
                </article>

                <!-- Bina Vokalia dan Musik -->
                <article class="ekskul-item">
                    <img src="{{ asset('images/ekskul-musik.jpg') }}" alt="Bina Vokalia dan Musik">
                    <div class="ekskul-content">
                        <h3>Bina Vokalia dan Musik</h3>
                        <p>Kegiatan ini bertujuan untuk menampung bakat siswa di bidang seni suara dan musik. Diharapkan dengan adanya kegiatan ini, bakat yang ada pada siswa akan lebih terasah. Kegiatan ini dibina oleh Yohana NI,S.Pd. Jadwal kegiatan ini yaitu setiap hari jum'at pada pukul 13.00-15.00 WIB.</p>
                    </div>
                </article>

                <!-- Tari -->
                <article class="ekskul-item">
                    <img src="{{ asset('images/ekskul-tari.jpg') }}" alt="Tari">
                    <div class="ekskul-content">
                        <h3>Tari</h3>
                        <p>Kegiatan Tari ini diadakan untuk menampung bakat seni siswa dibidang tari. Tari ini dibagi menjadi dua yaitu tari modern(cheerleaders) dan tari klasik(tradisional). Kegiatan ini dibina oleh Endang Hartatik, Spd. Kegiatan tari ini sudah pernah mengisi berbagai acara di Jember. Salah satunya yaitu pada Pembukaan Kegiatan MTQ dijember. Kegiatan ini dijadwalkan setiap hari rabu pada pukul 13.30-16.30.</p>
                    </div>
                </article>

                <!-- KIR -->
                <article class="ekskul-item">
                    <img src="{{ asset('images/ekskul-kir.jpg') }}" alt="KIR">
                    <div class="ekskul-content">
                        <h3>KIR</h3>
                        <p>Kegiatan ini bertujuan untuk mengajarkan siswa/siswi SMPN 10 Jember bagaimana menyusun karya tulis yang baik dan benar. Kegiatan ini dibina oleh ibu Yuni Winarsih Wilujeng. Kegiatan ini dijadwalkan setiap hari sabtu pada pukul 12.00-14.00 WIB.</p>
                    </div>
                </article>

                <!-- Modelling -->
                <article class="ekskul-item">
                    <img src="{{ asset('images/ekskul-modelling.jpg') }}" alt="Modelling">
                    <div class="ekskul-content">
                        <h3>Modelling</h3>
                        <p>Kegiatan ini dibina oleh Ibu Tri Handayani S.Pd. Kegiatan ini dijadwalkan setiap hari jum'at pada pukul 11.00-13.00 WIB. Kegiatan ini menampung siswa yang berminat dibidang modeling. Pada kegiatan ini siswa diajarkan segala sesuatu tentang dunia modeling baik fashion show ataupun tentang trend fashion yang sedang update. Pada periode 2008-2009, Tim modeling berhasil meraih juara 1 lomba fashion show tingkat kabupaten.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

@endsection
