<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    /**
     * Handle recruitment form submission
     */
    public function submit(Request $request)
    {
        // Validasi form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:recruitment_forms,email',
            'major' => 'required|string',
            'semester' => 'required|integer|min:1|max:14',
            'interest' => 'required|in:hardware,software,electronics,management,belum_tahu',
            'phone' => 'required|string|max:20',
            'g-recaptcha-response' => 'required|captcha',
        ], [
            'name.required' => 'Nama lengkap harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar sebelumnya',
            'major.required' => 'Program studi harus dipilih',
            'semester.required' => 'Semester harus diisi',
            'interest.required' => 'Bidang minat harus dipilih',
            'phone.required' => 'Nomor telepon harus diisi',
            'g-recaptcha-response.required' => 'Verifikasi reCAPTCHA diperlukan',
            'g-recaptcha-response.captcha' => 'Verifikasi reCAPTCHA gagal',
        ]);

        // For now, just return success message
        // Later: Save to database, send email notification, etc.

        return redirect('/')
            ->with('success', 'Terima kasih! Aplikasi Anda telah kami terima. Kami akan menghubungi Anda dalam 1-2 hari kerja.');
    }
}
