@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<style>
    .profil-section {
        padding: 50px 15px;
    }

    .profil-card {
        max-width: 650px;
        margin: 0 auto;
        padding: 40px 30px;
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
    }

    .profil-label {
        display: inline-block;
        background: #dc3545;
        color: white;
        padding: 7px 15px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
    }

    .foto-profil {
        width: 160px;
        height: 160px;
        object-fit: cover;
        object-position: center;
        border-radius: 50%;
        border: 5px solid #dc3545;
        display: block;
        margin: 25px auto 18px;
    }

    .profil-data {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 20px;
        margin-top: 25px;
        text-align: left;
    }

    .profil-data p {
        margin-bottom: 12px;
        color: #333;
    }

    .profil-data p:last-child {
        margin-bottom: 0;
    }

    @media (max-width: 576px) {
        .profil-card {
            padding: 30px 20px;
        }

        .profil-section {
            padding: 30px 10px;
        }
    }
</style>

<div class="container profil-section">
    <div class="profil-card text-center">

        <span class="profil-label">Profil Pembuat</span>

        <h1 class="fw-bold mt-4">
            Profil <span class="text-danger">Mahasiswa</span>
        </h1>

        {{-- Foto profil: simpan foto di public/assets/images/profil.jpg --}}
        <img
            src="{{ asset('assets/images/profil.jpg') }}"
            alt="Foto Profil Septa Wahdan Aditya"
            class="foto-profil"
            onerror="this.style.display='none';"
        >

        <h2 class="h3 fw-bold">Septa Wahdan Aditya</h2>
        <p class="text-secondary">Mahasiswa Sistem Informasi</p>

        <div class="profil-data">
            <p><strong>Nama:</strong> Septa Wahdan Aditya</p>
            <p><strong>NIM:</strong> 251011700258</p>
            <p><strong>Program Studi:</strong> Sistem Informasi</p>
            <p><strong>Proyek:</strong> Platform Belajar Online</p>
        </div>

        <a href="{{ route('home') }}" class="btn btn-dark mt-4">
            Kembali ke Beranda
        </a>

    </div>
</div>
@endsection