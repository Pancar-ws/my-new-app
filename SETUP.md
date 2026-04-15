# Setup Panduan - Tim Robotika Landing Page

## ✅ Yang Sudah Dibuat

- [x] Layout dengan Bootstrap 5 (`resources/views/layouts/app.blade.php`)
- [x] Landing page lengkap (`resources/views/welcome.blade.php`)
- [x] Custom CSS styling (`public/css/style.css`)
- [x] Recruitment controller (`app/Http/Controllers/RecruitmentController.php`)
- [x] Routes configuration (`routes/web.php`)
- [x] Environment variables untuk reCAPTCHA (`.env`)

---

## 🔧 Setup reCAPTCHA (Mandatory)

### 1. **Daftar di Google reCAPTCHA Admin Console**
   - Kunjungi: https://www.google.com/recaptcha/admin
   - Login dengan Google account
   - Klik "Create" atau "+" untuk tambah site baru
   - Isi form:
     - **Label**: Tim Robotika
     - **reCAPTCHA type**: Pilih "reCAPTCHA v2" → "I'm not a robot" Checkbox
     - **Domains**: Tambahkan `localhost` dan domain production Anda
   - Klik "Submit"

### 2. **Copy Keys**
   - Anda akan mendapat **Site Key** dan **Secret Key**
   - Copy kedua key tersebut

### 3. **Update .env file**
   Edit `c:\xampp\htdocs\my-new-app\.env`:
   ```
   RECAPTCHA_SITE_KEY=YOUR_SITE_KEY_DARI_GOOGLE
   RECAPTCHA_SECRET_KEY=YOUR_SECRET_KEY_DARI_GOOGLE
   ```

### 4. **Install Laravel Captcha Package (Optional)**
   Jika reCAPTCHA validation gagal, install:
   ```bash
   composer require anhskohbo/no-captcha
   ```

---

## 🚀 Test Aplikasi

1. **Buka browser**:
   ```
   http://localhost/my-new-app
   ```

2. **Test setiap section**:
   - ✓ Hero section dengan buttons
   - ✓ Team overview dengan stats
   - ✓ Featured projects cards
   - ✓ Resources links
   - ✓ Testimonials
   - ✓ Recruitment form

3. **Test form submission**:
   - Isi semua fields
   - Verifikasi reCAPTCHA
   - Klik "Kirim Aplikasi"
   - Harus lihat success message

---

## 📝 Customization

### **Ubah Data Dummy**
Edit di `resources/views/welcome.blade.php`:
- **Team name**: Baris 19 → `Tim Robotika {{ config('app.name') }}`
- **Tagline**: Baris 21
- **Statistics**: Baris 113-121 (anggota, kompetisi, penghargaan)
- **Projects**: Baris 157-269
- **Resources**: Baris 300-352
- **Testimonials**: Baris 399-442

### **Ubah Warna**
Edit `public/css/style.css` baris 7-13:
```css
:root {
    --primary: #6C63FF;      /* Warna utama (biru ungu) */
    --secondary: #FFB84D;    /* Warna accent (oranye) */
    --danger: #FF6B6B;       /* Merah */
    --success: #4ECDC4;      /* Hijau tosca */
}
```

### **Ubah YouTube Video**
Baris 52 di welcome.blade.php:
```html
<iframe src="https://www.youtube.com/embed/VIDEO_ID_ANDA" ...></iframe>
```

---

## 📊 Database Setup (Untuk Save Data)

Jika ingin save data recruitment ke database nanti:

```bash
# 1. Generate migration
php artisan make:migration create_recruitment_forms_table

# 2. Setup model
php artisan make:model RecruitmentForm
```

---

## 📧 Email Notification (Opsional)

Update `.env`:
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
```

---

## ⚠️ Common Issues

| Issue | Solution |
|-------|----------|
| Form tidak submit | Pastikan reCAPTCHA key sudah benar di .env |
| CSS tidak loaded | Clear cache: `php artisan cache:clear` |
| Routes error | Run: `php artisan route:cache` |
| CSRF error | Pastikan `@csrf` ada di form (sudah ada) |

---

## 📞 Contact Info (Edit di Footer)

Edit `resources/views/layouts/app.blade.php` baris 47-53:
- Email
- Social media links
- Location

---

**Status**: ✅ Siap untuk testing!
