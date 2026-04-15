@extends('layouts.app')

@section('content')
<!-- Flash Messages -->
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show m-4" role="alert">
        <i class="fas fa-check-circle"></i> {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible fade show m-4" role="alert">
        <i class="fas fa-exclamation-circle"></i> {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<!-- HERO SECTION -->
<section class="hero-section py-5 bg-gradient text-light">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="display-4 fw-bold mb-3">
                    Soedirman Robotic <span class="text-warning">Team</span>
                </h1>
                <p class="lead mb-4">
                    Membangun robot kompetitif dan mencetak prestasi di tingkat nasional dan internasional
                </p>
                <div class="hero-benefits mb-4">
                    <p class="mb-2">
                        <i class="fas fa-check-circle text-warning"></i>
                        <strong>Skill Teknis:</strong> Robotika, Embedded System, CAD Design
                    </p>
                    <p class="mb-2">
                        <i class="fas fa-check-circle text-warning"></i>
                        <strong>Pengalaman Lomba:</strong> Kompetisi nasional dan internasional
                    </p>
                    <p class="mb-2">
                        <i class="fas fa-check-circle text-warning"></i>
                        <strong>Workshop & Mentoring:</strong> Dari pembimbing berpengalaman
                    </p>
                </div>
                <div class="d-flex gap-3">
                    <a href="#rekrut" class="btn btn-warning btn-lg fw-bold">
                        <i class="fas fa-user-plus"></i> Daftar Rekrutmen
                    </a>
                    <a href="#proyek" class="btn btn-outline-light btn-lg fw-bold">
                        <i class="fas fa-project-diagram"></i> Lihat Proyek
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-media rounded-lg overflow-hidden shadow-lg">
                    <iframe
                        width="100%"
                        height="400"
                        src="https://www.youtube.com/embed/VIDEO_ID"
                        title="Demo Robot"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TENTANG TIM SECTION -->
<section id="tentang" class="tentang-section py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">
            <i class="fas fa-info-circle text-primary"></i> Tentang Tim Kami
        </h2>

        <div class="row mb-5">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow mb-4">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-3">Visi & Misi</h5>
                        <p class="card-text mb-3">
                            <strong>Visi:</strong> Menjadi tim robotika terdepan yang menghasilkan inovasi teknologi dan mengembangkan talenta muda di bidang rekayasa.
                        </p>
                        <p class="card-text">
                            <strong>Misi:</strong> Membangun robot berkualitas tinggi, meraih prestasi di kompetisi internasional, dan memberdayakan generasi muda melalui pendidikan robotika yang berkelanjutan.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="stat-card p-4 bg-light rounded">
                    <div class="stat-number text-primary fw-bold" style="font-size: 2.5rem;">45+</div>
                    <p class="stat-label">Anggota Aktif</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="stat-card p-4 bg-light rounded">
                    <div class="stat-number text-success fw-bold" style="font-size: 2.5rem;">28</div>
                    <p class="stat-label">Kompetisi Diikuti</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="stat-card p-4 bg-light rounded">
                    <div class="stat-number text-warning fw-bold" style="font-size: 2.5rem;">15</div>
                    <p class="stat-label">Penghargaan Diraih</p>
                </div>
            </div>
        </div>

        <div class="row mt-5 text-center">
            <div class="col-12">
                <p class="text-muted">Berdiri sejak <strong>2015</strong> dengan dedikasi penuh untuk kemajuan robotika nasional</p>
            </div>
        </div>
    </div>
</section>

<!-- PROYEK UNGGULAN SECTION -->
<section id="proyek" class="proyek-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">
            <i class="fas fa-project-diagram text-primary"></i> Proyek Unggulan
        </h2>

        <div class="row g-4">
            <!-- Project 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 hover-card">
                    <img src="https://via.placeholder.com/400x250/6C63FF/FFFFFF?text=Robot+Humanoid" class="card-img-top" alt="Robot Humanoid">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Robot Humanoid H-01</h5>
                        <p class="card-text text-muted">
                            Robot humanoid dengan sistem AI untuk kompetisi Robocup. Dilengkapi vision system dan autonomous navigation.
                        </p>
                        <div class="mb-3">
                            <span class="badge bg-primary">Hardware</span>
                            <span class="badge bg-info">AI</span>
                        </div>
                        <a href="#" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-right"></i> Detail
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-secondary ms-2">
                            <i class="fab fa-github"></i> Repo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 hover-card">
                    <img src="https://via.placeholder.com/400x250/FF6B6B/FFFFFF?text=Autonomous+Drone" class="card-img-top" alt="Autonomous Drone">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Autonomous Drone UAV-X</h5>
                        <p class="card-text text-muted">
                            Drone autonomous dengan kemampuan tracking dan surveillance. Sistem kontrol real-time dan flight autonomy.
                        </p>
                        <div class="mb-3">
                            <span class="badge bg-danger">Drone</span>
                            <span class="badge bg-warning">IoT</span>
                        </div>
                        <a href="#" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-right"></i> Detail
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-secondary ms-2">
                            <i class="fab fa-github"></i> Repo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 hover-card">
                    <img src="https://via.placeholder.com/400x250/4ECDC4/FFFFFF?text=Mobile+Robot" class="card-img-top" alt="Mobile Robot">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Mobile Robot ABU Robocon</h5>
                        <p class="card-text text-muted">
                            Robot mobile untuk kompetisi ABU Robocon 2026. Sistem mekanik presisi dan kontrol pergerakan pintar.
                        </p>
                        <div class="mb-3">
                            <span class="badge bg-success">Mekanik</span>
                            <span class="badge bg-info">Control</span>
                        </div>
                        <a href="#" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-right"></i> Detail
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-secondary ms-2">
                            <i class="fab fa-github"></i> Repo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DOKUMENTASI & RESOURCES SECTION -->
<section id="resources" class="resources-section py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">
            <i class="fas fa-book text-primary"></i> Dokumentasi & Resources
        </h2>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="resource-card card border-0 shadow-sm text-center p-4 h-100">
                    <div class="resource-icon mb-3" style="font-size: 3rem; color: #6C63FF;">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Tutorial</h5>
                    <p class="text-muted small mb-3">Panduan lengkap dari pemula hingga mahir</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-link"></i> Akses Tutorial
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="resource-card card border-0 shadow-sm text-center p-4 h-100">
                    <div class="resource-icon mb-3" style="font-size: 3rem; color: #FF6B6B;">
                        <i class="fas fa-cube"></i>
                    </div>
                    <h5 class="fw-bold mb-2">BOM & Komponen</h5>
                    <p class="text-muted small mb-3">Bill of Materials dan spesifikasi part</p>
                    <a href="#" class="btn btn-sm btn-outline-danger">
                        <i class="fas fa-download"></i> Download BOM
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="resource-card card border-0 shadow-sm text-center p-4 h-100">
                    <div class="resource-icon mb-3" style="font-size: 3rem; color: #4ECDC4;">
                        <i class="fas fa-drafting-compass"></i>
                    </div>
                    <h5 class="fw-bold mb-2">File CAD</h5>
                    <p class="text-muted small mb-3">Desain 3D dan blueprint mekanik</p>
                    <a href="#" class="btn btn-sm btn-outline-info">
                        <i class="fas fa-download"></i> Download CAD
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="resource-card card border-0 shadow-sm text-center p-4 h-100">
                    <div class="resource-icon mb-3" style="font-size: 3rem; color: #FFB84D;">
                        <i class="fab fa-github"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Repository</h5>
                    <p class="text-muted small mb-3">Source code dan dokumentasi teknis</p>
                    <a href="#" class="btn btn-sm btn-outline-warning">
                        <i class="fab fa-github"></i> GitHub Repo
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIAL & PRESTASI SECTION -->
<section class="testimonial-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">
            <i class="fas fa-star text-warning"></i> Testimonial & Prestasi
        </h2>

        <div class="row mb-5">
            <!-- Testimonial 1 -->
            <div class="col-lg-6 mb-4">
                <div class="testimonial-card card border-0 shadow-sm p-4">
                    <div class="d-flex mb-3">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                    </div>
                    <p class="card-text mb-3 fst-italic">
                        "Tim robotika kami adalah aset terbesar. Dedikasi mereka dalam setiap proyek sangat luar biasa. Mereka tidak hanya membangun robot, tapi juga karakter dan profesionalisme."
                    </p>
                    <div class="d-flex align-items-center">
                        <div class="avatar me-3">
                            <img src="https://via.placeholder.com/50" class="rounded-circle" alt="Dr. Budi">
                        </div>
                        <div>
                            <strong>Dr. Budi Sutrisno</strong>
                            <br>
                            <small class="text-muted">Pembimbing Tim Robotika</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="col-lg-6 mb-4">
                <div class="testimonial-card card border-0 shadow-sm p-4">
                    <div class="d-flex mb-3">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                    </div>
                    <p class="card-text mb-3 fst-italic">
                        "Bergabung dengan tim ini mengubah hidup saya. Saya belajar lebih dari sekadar teknis, tapi juga kepemimpinan dan teamwork yang sesungguhnya."
                    </p>
                    <div class="d-flex align-items-center">
                        <div class="avatar me-3">
                            <img src="https://via.placeholder.com/50" class="rounded-circle" alt="Ahmad">
                        </div>
                        <div>
                            <strong>Ahmad Rizki</strong>
                            <br>
                            <small class="text-muted">Ketua Tim 2025</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="text-center mb-4 fw-bold">Penghargaan & Sertifikasi</h4>
        <div class="row text-center g-4">
            <div class="col-md-3 col-sm-6">
                <div class="award-item">
                    <div style="font-size: 2.5rem; color: #FFD700; margin-bottom: 10px;">
                        <i class="fas fa-medal"></i>
                    </div>
                    <p class="text-muted small">Juara 1 ABU Robocon 2024</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="award-item">
                    <div style="font-size: 2.5rem; color: #C0C0C0; margin-bottom: 10px;">
                        <i class="fas fa-medal"></i>
                    </div>
                    <p class="text-muted small">Finalist Robocup 2023</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="award-item">
                    <div style="font-size: 2.5rem; color: #CD7F32; margin-bottom: 10px;">
                        <i class="fas fa-medal"></i>
                    </div>
                    <p class="text-muted small">Best Design Award 2024</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="award-item">
                    <div style="font-size: 2.5rem; color: #6C63FF; margin-bottom: 10px;">
                        <i class="fas fa-award"></i>
                    </div>
                    <p class="text-muted small">Innovation Prize 2025</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- REKRUTMEN FORM SECTION -->
<section id="rekrut" class="rekrut-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-center mb-5 fw-bold">
                    <i class="fas fa-user-plus text-primary"></i> Bergabunglah dengan Tim Kami
                </h2>

                <div class="card border-0 shadow-lg p-5">
                    <form method="POST" action="{{ route('recruit.submit') }}" enctype="multipart/form-data" id="recruitForm">
                        @csrf

                        <!-- Nama Lengkap -->
                        <div class="mb-4">
                            <label for="name" class="form-label fw-bold">Nama Lengkap</label>
                            <input
                                type="text"
                                class="form-control form-control-lg @error('name') is-invalid @enderror"
                                id="name"
                                name="name"
                                placeholder="Masukkan nama lengkap Anda"
                                required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input
                                type="email"
                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                id="email"
                                name="email"
                                placeholder="Masukkan email Anda"
                                required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Jurusan -->
                        <div class="mb-4">
                            <label for="major" class="form-label fw-bold">Program Studi / Jurusan</label>
                            <select
                                class="form-select form-select-lg @error('major') is-invalid @enderror"
                                id="major"
                                name="major"
                                required>
                                <option value="">Pilih Program Studi</option>
                                <option value="teknik_mesin">Teknik Mesin</option>
                                <option value="teknik_elektro">Teknik Elektro</option>
                                <option value="teknik_komputer">Teknik Komputer</option>
                                <option value="teknik_industri">Teknik Industri</option>
                                <option value="ilmu_komputer">Ilmu Komputer</option>
                                <option value="lainnya">Program Studi Lainnya</option>
                            </select>
                            @error('major')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Semester -->
                        <div class="mb-4">
                            <label for="semester" class="form-label fw-bold">Semester</label>
                            <input
                                type="number"
                                class="form-control form-control-lg @error('semester') is-invalid @enderror"
                                id="semester"
                                name="semester"
                                placeholder="Contoh: 1, 2, 3"
                                min="1"
                                max="14"
                                required>
                            @error('semester')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Minat -->
                        <div class="mb-4">
                            <label for="interest" class="form-label fw-bold">Minat Bidang</label>
                            <select
                                class="form-select form-select-lg @error('interest') is-invalid @enderror"
                                id="interest"
                                name="interest"
                                required>
                                <option value="">Pilih Bidang Minat</option>
                                <option value="hardware">Hardware & Mekanik</option>
                                <option value="software">Software & Programming</option>
                                <option value="electronics">Electronics & Control</option>
                                <option value="management">Manajemen & Koordinasi</option>
                                <option value="belum_tahu">Belum Tahu / Umum</option>
                            </select>
                            @error('interest')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Nomor Telepon -->
                        <div class="mb-4">
                            <label for="phone" class="form-label fw-bold">Nomor Telepon</label>
                            <input
                                type="tel"
                                class="form-control form-control-lg @error('phone') is-invalid @enderror"
                                id="phone"
                                name="phone"
                                placeholder="Contoh: 081234567890"
                                required>
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- reCAPTCHA v2 -->
                        <div class="mb-4">
                            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                            @error('g-recaptcha-response')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg fw-bold">
                                <i class="fas fa-paper-plane"></i> Kirim Aplikasi
                            </button>
                        </div>

                        <p class="text-center text-muted small mt-3">
                            Kami akan menghubungi Anda dalam 1-2 hari kerja
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
