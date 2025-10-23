{{-- 
    Langkah 1: Kita pakai "Sampul" (Header & Footer)
    dari file /layouts/app.blade.php 
--}}
@extends('layouts.app')

{{-- 
    Langkah 2: Kita isi "slot" konten yang kosong
    dengan semua HTML khusus untuk halaman ini.
--}}
@section('content')

    <!-- Bagian 1: Konten Halaman Layanan Kami -->
    <section class="content-section">
        <div class="container text-center">

            <!-- Judul Halaman -->
            <h2 class="section-title">Layanan Kami</h2>

            <!-- 
                Grid untuk Kartu Layanan.
                Ini adalah kode yang SAMA PERSIS dengan yang ada di home.blade.php.
                Kita menggunakannya kembali di sini.
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