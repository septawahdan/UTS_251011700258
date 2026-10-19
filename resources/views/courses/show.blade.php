@extends('layouts.app')

@section('title', 'Detail Kursus')

@section('content')

<div class="container">

    {{-- TOMBOL KEMBALI --}}
    <a href="{{ route('courses.index') }}"
       class="btn btn-outline-dark mb-4">
        &larr; Kembali ke Daftar Kursus
    </a>

    {{-- DETAIL KURSUS --}}
    <div class="card border-0 shadow rounded-4 overflow-hidden">
        <div class="row g-0">

            {{-- GAMBAR KURSUS --}}
            <div class="col-lg-5">
                <img
                    src="{{ asset('assets/images/' . $course->image) }}"
                    alt="{{ $course->title }}"
                    class="w-100"
                    style="height: 100%; min-height: 350px; object-fit: cover;"
                    onerror="this.style.display='none'"
                >
            </div>

            {{-- INFORMASI KURSUS --}}
            <div class="col-lg-7">
                <div class="card-body p-4 p-md-5">

                    <span class="badge bg-danger px-3 py-2 mb-3">
                        {{ $course->category }}
                    </span>

                    <h1 class="fw-bold mb-3">
                        {{ $course->title }}
                    </h1>

                    <p class="text-muted mb-4">
                        {{ $course->description ?? 'Pelajari materi kursus ini untuk menambah pengetahuan dan meningkatkan keterampilanmu.' }}
                    </p>

                    <hr>

                    <div class="row g-3 my-3">

                        <div class="col-sm-6">
                            <div class="p-3 bg-light rounded-3 h-100">
                                <small class="text-muted d-block mb-1">
                                    Instruktur
                                </small>
                                <span class="fw-semibold">
                                    {{ $course->instructor }}
                                </span>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="p-3 bg-light rounded-3 h-100">
                                <small class="text-muted d-block mb-1">
                                    Durasi Belajar
                                </small>
                                <span class="fw-semibold">
                                    {{ $course->duration }}
                                </span>
                            </div>
                        </div>

                    </div>

                    <div class="mt-4">
                        <small class="text-muted">
                            Harga Kursus
                        </small>

                        <h2 class="text-danger fw-bold mt-1">
                            Rp{{ number_format($course->price, 0, ',', '.') }}
                        </h2>
                    </div>

                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <a href="{{ route('courses.index') }}"
                           class="btn btn-danger px-4">
                            Jelajahi Kursus Lain
                        </a>

                        <a href="{{ route('courses.index') }}"
                           class="btn btn-outline-dark px-4">
                            Kembali ke Beranda
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection