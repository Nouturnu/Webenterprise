<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Penting untuk validasi reCAPTCHA
use Illuminate\Support\Facades\Validator; // Penting untuk validasi

class ContactController extends Controller
{
    /**
     * Menampilkan halaman form kontak.
     */
    public function index()
    {
        return view('hubungi-kami');
    }

    /**
     * Menyimpan data dari form kontak.
     */
    public function store(Request $request)
    {
        // 1. Validasi reCAPTCHA
        $recaptchaResponse = $request->input('g-recaptcha-response');
        $secretKey = env('GOOGLE_RECAPTCHA_SECRET');

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $secretKey,
            'response' => $recaptchaResponse,
            'remoteip' => $request->ip(),
        ]);

        $recaptchaData = $response->json();

        // 2. Validasi Form
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
            'g-recaptcha-response' => 'required', // Pastikan reCAPTCHA diisi
        ]);

        // 3. Cek apakah ada yang gagal
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        // 4. Cek apakah reCAPTCHA valid
        if (!($recaptchaData['success'] ?? false)) {
            // Jika reCAPTCHA gagal, kembali dengan pesan error
            return redirect()->back()
                        ->withErrors(['g-recaptcha-response' => 'Validasi reCAPTCHA gagal. Silakan coba lagi.'])
                        ->withInput();
        }

        // 5. JIKA SEMUA BERHASIL:
        // Di sini Anda bisa menambahkan logika untuk mengirim email atau menyimpan ke database
        // Untuk sekarang, kita hanya akan kembali dengan pesan sukses.
        
        return redirect()->back()->with('success', 'Pesan Anda telah berhasil terkirim!');
    }
}