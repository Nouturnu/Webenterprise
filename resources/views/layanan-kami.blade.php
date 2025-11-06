@extends('layouts.app')

@section('content')

    <!-- Bagian 1: Hero Image Halaman "Layanan Kami" -->
    <section class="page-hero" style="background-image: url('{{ asset('images/pexels-photo-3184296.jpeg') }}');">
        <div class="container">
            <h1>LAYANAN KAMI</h1>
        </div>
    </section>

    <!-- Bagian 2: Konten Halaman Layanan Kami -->
    <section class="content-section">
        <div class="container text-center">
            
            <!-- 
                Grid untuk Kartu Layanan.
                Judul h2 "Layanan Kami" yang sebelumnya ada di sini, sudah dihapus
                karena judulnya sudah ada di hero section di atas.
            -->
            <div class="services-grid">
                <!-- Kartu 1 -->
                <a href="#" class="service-card" style="background-image: url('{{ asset('images/bachelor.png') }}');">
                    <div class="service-card-overlay">
                        <h3>Studi S1 - Bachelor</h3>
                    </div>
                </a>
                <!-- Kartu 2 -->
                <a href="#" class="service-card" style="background-image: url('{{ asset('images/master.png') }}');">
                    <div class="service-card-overlay">
                        <h3>Studi S2 - Master</h3>
                    </div>
                </a>
                <!-- Kartu 3 -->
                <a href="#" class="service-card" style="background-image: url('{{ asset('images/phd.jpg') }}');">
                    <div class="service-card-overlay">
                        <h3>Studi S3 - Ph.D</h3>
                    </div>
                </a>
                <!-- Kartu 4 -->
                <a href="#" class="service-card" style="background-image: url('{{ asset('images/bahasajerman.png') }}');">
                    <div class="service-card-overlay">
                        <h3>Kursus Bahasa Asing</h3>
                    </div>
                </a>
                <!-- Kartu 5 -->
                <a href="#" class="service-card" style="background-image: url('{{ asset('images/studytour.png') }}');">
                    <div class="service-card-overlay">
                        <h3>Study Tour</h3>
                    </div>
                </a>
                <!-- Kartu 6 -->
                <a href="#" class="service-card" style="background-image: url('{{ asset('images/ausbildung.jpg') }}');">
                    <div class="service-card-overlay">
                        <h3>Ausbildung</h3>
                    </div>
                </a>
            </div>

        </div>
    </section>

@endsection