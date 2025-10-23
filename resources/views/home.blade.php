@extends('layouts.app')

@section('content')

    <!-- Section 1: Hero Section -->
    {{-- Menggunakan 'picgedung.png' sesuai dengan file Anda --}}
    <section class="hero-section" style="background-image: url('{{ asset('images/picgedung.png') }}');">
        <div class="hero-content">
            <h1>INGIN KULIAH DAN BERKARIR<br>DI LUAR NEGERI?</h1>
            <a href="#" class="btn btn-secondary">SELENGKAPNYA</a>
        </div>
    </section>

  <!-- Section: Tentang Kami (PERBAIKAN - Versi Homepage Sederhana) -->
<section id="tentang" class="content-section about-homepage">
    <div class="container text-center">
        <h2 class="section-title">TENTANG KAMI</h2>
        <p>
            INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah memberangkatkan lebih dari 3000 mahasiswa indonesia yang ingin kuliah, perjalanan wisata dan berkarir dinegara maju didunia.
        </p>
        <!-- Tombol ini akan mengarahkan ke halaman "Tentang Kami" yang detail -->
    </div>
</section>

    <!-- Section 3: Layanan Kami -->
    <section class="content-section bg-light">
        <div class="container">
            <h2 class="text-center">Layanan Kami</h2>
            <div class="services-grid">
                <!-- Service Card 1: menggunakan 'bachelor.png' -->
                <div class="service-card" style="background-image: url('{{ asset('images/bachelor.png') }}');">
                    <div class="service-card-overlay">
                        <h3>Studi S1 - Bachelor</h3>
                    </div>
                </div>
                <!-- Service Card 2: menggunakan 'master.png' -->
                <div class="service-card" style="background-image: url('{{ asset('images/master.png') }}');">
                    <div class="service-card-overlay">
                        <h3>Studi S2 - Master</h3>
                    </div>
                </div>
                <!-- Service Card 3: menggunakan 'phd.jpg' -->
                <div class="service-card" style="background-image: url('{{ asset('images/phd.jpg') }}');">
                    <div class="service-card-overlay">
                        <h3>Studi S3 - Ph.D</h3>
                    </div>
                </div>
                <!-- Service Card 4: menggunakan 'bahasajerman.png' -->
                <div class="service-card" style="background-image: url('{{ asset('images/bahasajerman.png') }}');">
                    <div class="service-card-overlay">
                        <h3>Kursus Bahasa Asing</h3>
                    </div>
                </div>
                <!-- Service Card 5: menggunakan 'studytour.png' -->
                <div class="service-card" style="background-image: url('{{ asset('images/studytour.png') }}');">
                     <div class="service-card-overlay">
                        <h3>Study Tour</h3>
                    </div>
                </div>
                <!-- Service Card 6: menggunakan 'ausbildung.jpg' -->
                <div class="service-card" style="background-image: url('{{ asset('images/ausbildung.jpg') }}');">
                    <div class="service-card-overlay">
                        <h3>Ausbildung</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Section: Mitra Kami (PERBAIKAN TOTAL) -->
<section class="content-section">
    <div class="container text-center">
        <h2 class="section-title">MITRA KAMI</h2>

        <!-- Grid untuk Logo-logo Mitra (PERBAIKAN URUTAN) -->
        <div class="partner-logos">
            <!-- Logo 1 (Paling Kiri) -->
            <div class="partner-logo-card">
                <img src="{{ asset('images/aviation.jpg') }}" alt="424 Aviation Logo">
            </div>

            <!-- Logo 2 -->
            <div class="partner-logo-card">
                <img src="{{ asset('images/adrew.png') }}" alt="St. Andrew's College Logo">
            </div>

            <!-- Logo 3 -->
            <div class="partner-logo-card">
                <img src="{{ asset('images/htw.png') }}" alt="HTW Berlin Logo">
            </div>

            <!-- Logo 4 (Paling Kanan) -->
            <div class="partner-logo-card">
                <img src="{{ asset('images/studygroup.png') }}" alt="Study Group Logo">
            </div>
        </div>

        <!-- Banner Konseling Gratis -->
        <div class="counseling-banner">
            <div class="banner-text">
                <h3>GRATIS KONSELING STUDI DI LUAR NEGERI !!!</h3>
                <p>Konsultasi seputar kuliah / bekerja di Luar Negeri</p>
            </div>
            <a href="#" class="btn btn-secondary">MULAI KONSULTASI <span class="arrow">&#x25BC;</span></a>
        </div>
    </div>
</section>

   <!-- Section: Artikel Terbaru (PERBAIKAN TOTAL) -->
<section class="content-section bg-light">
    <div class="container text-center">
        <h2 class="section-title">ARTIKEL TERBARU</h2>

        <!-- Grid untuk Kartu Artikel -->
        <div class="articles-grid">
            <!-- Artikel 1 -->
            <a href="#" class="article-card">
                <img src="{{ asset('images/artikel1.jpg') }}" alt="Ilustrasi studi di Jerman">
                <div class="article-content">
                    <h3>5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</h3>
                </div>
            </a>

            <!-- Artikel 2 -->
            <a href="#" class="article-card">
                <img src="{{ asset('images/artikel2.jpg') }}" alt="Gedung Parlemen Uni Eropa">
                <div class="article-content">
                    <h3>Uni Eropa Menghadapi Virus Corona</h3>
                </div>
            </a>

            <!-- Artikel 3 -->
            <a href="#" class="article-card">
                <img src="{{ asset('images/bahasajerman.png') }}" alt="Pemandangan pegunungan Jerman">
                <div class="article-content">
                    <h3>Belajar Bahasa Jerman Bersama Goethe Institut</h3>
                </div>
            </a>

            <!-- Artikel 4 -->
            <a href="#" class="article-card">
                <img src="{{ asset('images/gatescambride.png') }}" alt="Pantai saat matahari terbenam">
                <div class="article-content">
                    <h3>Apa Itu Gates Cambridge? Yuk Cari Tahu</h3>
                </div>
            </a>
        </div>

        <!-- Tombol Lainnya (jika ada di desain final) -->
        <!-- <a href="#" class="btn btn-outline">LAINNYA</a> -->
    </div>
</section>

@endsection

