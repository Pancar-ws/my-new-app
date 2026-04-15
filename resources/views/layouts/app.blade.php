<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tim Robotika')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <i class="fas fa-robot"></i> Blakasutha Team
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#proyek">Proyek</a></li>
                    <li class="nav-item"><a class="nav-link" href="#resources">Resources</a></li>
                    <li class="nav-item"><a class="nav-link" href="#rekrut">Rekrutmen</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4">
                    <h5><i class="fas fa-map-marker-alt"></i> Lokasi</h5>
                    <p>Gedung Teknik Lantai 2<br>Laboratorium Robotika</p>
                </div>
                <div class="col-md-4">
                    <h5><i class="fas fa-clock"></i> Jam Latihan</h5>
                    <p>Selasa: 16:00 - 18:00<br>Kamis: 16:00 - 18:00</p>
                </div>
                <div class="col-md-4">
                    <h5><i class="fas fa-envelope"></i> Hubungi Kami</h5>
                    <p>Email: robotika@kampus.ac.id<br>
                    <a href="#" class="text-decoration-none text-warning">
                        <i class="fab fa-instagram"></i> Instagram
                    </a> |
                    <a href="#" class="text-decoration-none text-warning">
                        <i class="fab fa-youtube"></i> YouTube
                    </a> |
                    <a href="#" class="text-decoration-none text-warning">
                        <i class="fab fa-github"></i> GitHub
                    </a></p>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p class="mb-0">&copy; 2026 Tim Robotika. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    @stack('scripts')
</body>
</html>
