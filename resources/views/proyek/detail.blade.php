@extends('layouts.app')

@section('content')
<!-- PROJECT HEADER -->
<section class="proyek-header py-5" style="background: linear-gradient(135deg, #6C63FF 0%, #5A4FA0 100%);">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <span class="badge bg-light text-dark mb-3">{{ $proyek['status'] }}</span>
                <h1 class="display-4 fw-bold text-white mb-3">{{ $proyek['title'] }}</h1>
                <p class="lead text-white-50 mb-4">{{ $proyek['subtitle'] }}</p>
                <p class="text-white fs-5">{{ $proyek['longDesc'] }}</p>
                <div class="d-flex gap-3 mt-4">
                    <a href="{{ $proyek['github'] }}" class="btn btn-light btn-lg">
                        <i class="fab fa-github"></i> GitHub Repository
                    </a>
                    <a href="#tim" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-users"></i> Lihat Tim
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ $proyek['image'] }}" alt="{{ $proyek['title'] }}" class="img-fluid rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- GALLERY SECTION -->
<section class="gallery-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">
            <i class="fas fa-images text-primary"></i> Galeri Proyek
        </h2>

        <div class="row g-4">
            @foreach ($proyek['gallery'] as $index => $image)
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item overflow-hidden rounded-lg shadow-sm" style="height: 300px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="{{ $image }}">
                        <img src="{{ $image }}" alt="Gallery {{ $index + 1 }}" class="img-fluid w-100 h-100 object-fit-cover" style="object-fit: cover;">
                        <div class="gallery-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.5); opacity: 0; transition: opacity 0.3s ease;">
                            <i class="fas fa-search-plus text-white" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- SPESIFIKASI & FITUR SECTION -->
<section class="specs-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6">
                <h3 class="fw-bold mb-4">
                    <i class="fas fa-microchip text-primary"></i> Spesifikasi Teknis
                </h3>
                <table class="table table-borderless">
                    @foreach ($proyek['specs'] as $key => $value)
                        <tr>
                            <td class="fw-bold text-primary">{{ $key }}</td>
                            <td class="text-muted">{{ $value }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>

            <div class="col-lg-6">
                <h3 class="fw-bold mb-4">
                    <i class="fas fa-star text-warning"></i> Fitur Utama
                </h3>
                <div>
                    @foreach ($proyek['features'] as $feature)
                        <div class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                            <span>{{ $feature }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TIMELINE SECTION -->
<section class="timeline-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">
            <i class="fas fa-clock text-primary"></i> Timeline Pengembangan
        </h2>

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="timeline">
                    @foreach ($proyek['timeline'] as $index => $item)
                        <div class="timeline-item mb-5">
                            <div class="timeline-marker">
                                <div class="timeline-dot"></div>
                                @if ($index < count($proyek['timeline']) - 1)
                                    <div class="timeline-line"></div>
                                @endif
                            </div>
                            <div class="timeline-content ps-4">
                                <h5 class="fw-bold">{{ $item['event'] }}</h5>
                                <p class="text-muted small mb-2">{{ $item['year'] }}</p>
                                <p class="text-secondary">{{ $item['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TEAM SECTION -->
<section id="tim" class="team-section py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">
            <i class="fas fa-users text-primary"></i> Tim Pengembang
        </h2>

        <div class="row g-4">
            @foreach ($proyek['team'] as $member)
                <div class="col-md-6 col-lg-4">
                    <div class="team-card card text-center shadow-sm border-0 h-100 p-4">
                        <img src="{{ $member['avatar'] }}" alt="{{ $member['name'] }}" class="rounded-circle mx-auto mb-3" width="100" height="100">
                        <h5 class="fw-bold">{{ $member['name'] }}</h5>
                        <p class="text-primary fw-bold mb-3">{{ $member['role'] }}</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- BACK & NAVIGATION -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <a href="/#proyek" class="btn btn-primary btn-lg">
                    <i class="fas fa-arrow-left"></i> Kembali ke Proyek Unggulan
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Modal -->
<div class="modal fade" id="galleryModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img id="modalImage" src="" class="img-fluid w-100 rounded" alt="Gallery">
            </div>
        </div>
    </div>
</div>

<!-- Styles -->
<style>
    .gallery-item {
        position: relative;
        overflow: hidden;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1 !important;
    }

    .object-fit-cover {
        object-fit: cover !important;
    }

    /* Timeline Styles */
    .timeline {
        position: relative;
    }

    .timeline-item {
        position: relative;
        padding-left: 50px;
    }

    .timeline-marker {
        position: absolute;
        left: -20px;
        top: 0;
        width: 40px;
        height: auto;
    }

    .timeline-dot {
        width: 20px;
        height: 20px;
        background: linear-gradient(135deg, #6C63FF 0%, #5A4FA0 100%);
        border: 3px solid #fff;
        border-radius: 50%;
        box-shadow: 0 0 0 3px rgba(108, 99, 255, 0.2);
    }

    .timeline-line {
        width: 2px;
        height: calc(100% + 30px);
        background: linear-gradient(180deg, #6C63FF 0%, #5A4FA0 100%);
        position: absolute;
        left: 8px;
        top: 20px;
    }

    .team-card:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease;
    }

    .proyek-header {
        color: white;
    }

    .text-white-50 {
        color: rgba(255, 255, 255, 0.6);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const galleryModal = document.getElementById('galleryModal');
        galleryModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const image = button.getAttribute('data-image');
            const modalImage = document.getElementById('modalImage');
            modalImage.src = image;
        });
    });
</script>

@endsection
