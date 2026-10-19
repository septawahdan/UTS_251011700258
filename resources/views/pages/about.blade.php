@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <span class="badge bg-danger p-2">Tentang Kami</span>
        <h1 class="fw-bold mt-3">
            Belajar <span class="text-danger">Online Kita</span>
        </h1>
        <p class="text-secondary">
            Platform pembelajaran online untuk membantu meningkatkan
            pengetahuan dan keterampilan.
        </p>
    </div>

    <div class="card border-0 shadow-sm mx-auto" style="max-width: 800px;">
        <div class="card-body p-4 p-md-5">
            <h3 class="fw-bold">Tujuan Platform</h3>

            <p class="text-secondary">
                Belajar Online Kita menyediakan informasi berbagai pilihan
                kursus di bidang pemrograman, desain, bisnis, dan teknologi.
                Pengunjung dapat melihat daftar kursus serta informasi
                detail setiap kursus.
            </p>

            <h3 class="fw-bold mt-4">Fitur Website</h3>

            <ul class="text-secondary">
                <li>Halaman beranda dan navigasi.</li>
                <li>Daftar kursus beserta informasi harga.</li>
                <li>Halaman detail setiap kursus.</li>
                <li>Informasi tentang platform dan profil pembuat.</li>
            </ul>

            <a href="{{ route('courses.index') }}" class="btn btn-danger mt-3">
                Lihat Daftar Kursus
            </a>
        </div>
    </div>
</div>
@endsection