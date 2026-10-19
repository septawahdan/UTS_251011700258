@extends('layouts.app')

@section('title', 'Kursus')

@section('content')

<style>
    .kursus-header {
        background: #172033;
        color: white;
        padding: 45px 0;
    }

    .kursus-header h1 {
        font-size: 38px;
        font-weight: 800;
    }

    .kursus-header h1 span {
        color: #ff4757;
    }

    .kursus-header p {
        color: #cbd5e1;
        margin-bottom: 0;
    }

    .kursus-section {
        padding: 45px 0 60px;
    }

    .kursus-card {
        height: 100%;
        background: white;
        border: 1px solid #e9edf3;
        border-radius: 12px;
        overflow: hidden;
        transition: .2s;
    }

    .kursus-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 22px rgba(0, 0, 0, .08);
    }

    .kursus-img {
        width: 100%;
        height: 190px;
        object-fit: cover;
        background: #e9edf3;
    }

    .kursus-placeholder {
        height: 190px;
        background: #edf0f6;
        color: #dc3545;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 55px;
    }

    .kursus-kategori {
        color: #dc3545;
        font-size: 13px;
        font-weight: 700;
    }

    .kursus-judul {
        font-size: 19px;
        font-weight: 700;
        color: #172033;
        margin: 12px 0;
    }

    .kursus-info {
        color: #6b7280;
        font-size: 14px;
        margin-bottom: 8px;
    }

    .kursus-harga {
        font-size: 18px;
        font-weight: 800;
        color: #dc3545;
    }

    .kursus-tombol {
        display: block;
        text-align: center;
        text-decoration: none;
        background: #172033;
        color: white;
        padding: 10px;
        border-radius: 8px;
        margin-top: 16px;
        transition: .2s;
    }

    .kursus-tombol:hover {
        background: #dc3545;
        color: white;
    }

    <style>
    .pagination {
        justify-content: center;
        gap: 4px;
        margin-top: 20px;
    }

    .pagination .page-link {
        font-size: 14px;
        padding: 6px 12px;
        border-radius: 6px;
    }

    .pagination svg {
        width: 16px !important;
        height: 16px !important;
    }

    .pagination nav svg {
        width: 16px !important;
        height: 16px !important;
    }

    nav[role="navigation"] svg {
        width: 16px !important;
        height: 16px !important;
    }

    nav[role="navigation"] a,
    nav[role="navigation"] span {
        font-size: 14px;
    }

</style>
</style>

<section class="kursus-header">
    <div class="container">
        <h1>Daftar <span>Kursus</span></h1>
        <p>Pilih kursus yang sesuai dengan minat dan kebutuhanmu.</p>
    </div>
</section>

<section class="kursus-section">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold mb-0">Semua Kursus</h4>
            <span class="text-secondary small">
                {{ $courses->total() }} kursus tersedia
            </span>
        </div>

        <div class="row g-4">
            @forelse ($courses as $course)
                <div class="col-md-6 col-lg-4">
                    <div class="kursus-card">

                        @if ($course->image &&
                             file_exists(public_path('assets/images/' . $course->image)))
                            <img
                                src="{{ asset('assets/images/' . $course->image) }}"
                                class="kursus-img"
                                alt="{{ $course->title }}">
                        @else
                            <div class="kursus-placeholder">
                                <i class="bi bi-book"></i>
                            </div>
                        @endif

                        <div class="p-4">
                            <div class="kursus-kategori">
                                {{ $course->category }}
                            </div>

                            <h5 class="kursus-judul">
                                {{ $course->title }}
                            </h5>

                            <div class="kursus-info">
                                <i class="bi bi-person me-2"></i>
                                {{ $course->instructor }}
                            </div>

                            <div class="kursus-info">
                                <i class="bi bi-clock me-2"></i>
                                {{ $course->duration }}
                            </div>

                            <hr>

                            <div class="kursus-harga">
                                Rp{{ number_format($course->price, 0, ',', '.') }}
                            </div>

                            <a href="{{ route('courses.show', $course->id) }}"
                               class="kursus-tombol">
                                Lihat Detail
                                <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <i class="bi bi-book text-danger display-4"></i>
                    <h5 class="mt-3">Belum ada kursus</h5>
                    <p class="text-secondary">
                        Data kursus belum tersedia.
                    </p>
                </div>
            @endforelse
        </div>

        <div class="d-flex justify-content-center mt-5">
            {{ $courses->links('pagination::bootstrap-5') }}
        </div>

    </div>
</section>

@endsection