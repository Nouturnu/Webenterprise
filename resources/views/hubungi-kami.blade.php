@extends('layouts.app')

@section('content')

<!-- Bagian 1: Hero Image Halaman "Hubungi Kami" -->
{{-- Ganti 'contact-hero.jpg' dengan nama file gambar Anda --}}
<section class="page-hero" style="background-image: url('{{ asset('images/nurse2.jpg') }}');">
    <div class="container">
        <h1>HUBUNGI KAMI</h1>
    </div>
</section>

<!-- Bagian 2: Konten Utama (Form & Lokasi) -->
<section class="content-section">
    <div class="container">
        <div class="contact-page-grid">

            <!-- Kolom Kiri: Form Kirim Pesan -->
            <div class="contact-form-container">
                <h2 class="contact-page-title">KIRIM PESAN</h2>

                <!-- Menampilkan Pesan Sukses -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Menampilkan Pesan Error Validasi -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf <!-- Token Keamanan Laravel -->

                    <div class="form-group">
                        <label for="nama">Nama Anda</label>
                        <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Anda</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="pesan">Pesan Anda</label>
                        <textarea id="pesan" name="pesan" rows="6" required>{{ old('pesan') }}</textarea>
                    </div>

                    <!-- Google reCAPTCHA v2 Box -->
                    <div class="form-group recaptcha-container">
                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-contact">KIRIM PESAN</button>
                    </div>
                </form>
            </div>

            <!-- Kolom Kanan: Lokasi Kami -->
            <div class="location-details-container">
                <h2 class="contact-page-title">LOKASI KAMI</h2>

                <div class="location-item">
                    <h3>KANTOR PUSAT</h3>
                    <p>Gedung Ir. H. M. Suseno - JL. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
                    <p>Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
                    <p>Hotline: +6281519040071 / +62811998167</p>
                </div>

                <div class="location-item">
                    <h3>KANTOR CABANG</h3>
                    <p>Alamat kantor cabang Anda akan ditaruh di sini jika ada.</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

<!-- Memuat script reCAPTCHA v2 -->
@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush