@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<style>
    .hero {
        background: #ffffff;
        color: #111f38;
        padding: 85px 0;
    }

    .hero-label {
        color: #ff4057;
        font-size: 14px;
        font-weight: 800;
        letter-spacing: 0.5px;
        margin-bottom: 20px;
    }

    .hero h1 {
        font-size: clamp(34px, 5vw, 58px);
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 22px;
    }

    .hero h1 span {
        color: #ff4057;
    }

    .hero p {
        color: #52627a;
        font-size: 16px;
        line-height: 1.8;
        max-width: 540px;
        margin-bottom: 25px;
    }

    .hero-icon {
        font-size: 150px;
        color: #ff5964;
    }

    @media (max-width: 767px) {
        .hero {
            padding: 55px 0;
            text-align: center;
        }

        .hero p {
            margin-left: auto;
            margin-right: auto;
        }

        .hero-icon {
            font-size: 100px;
            margin-top: 35px;
        }
    }
</style>

<section class="hero">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-7">

                <div class="hero-label">
                    <i class="bi bi-mortarboard-fill"></i>
                    PLATFORM BELAJAR ONLINE
                </div>

                <h1>
                    Selamat Datang di
                    <span>Belajar Online Kita</span>
                </h1>

                <p>
                    Kembangkan keterampilan dan pengetahuanmu melalui
                    berbagai pilihan kursus online dengan harga terjangkau.
                    Belajar lebih mudah, kapan saja dan di mana saja.
                </p>

                <a href="{{ route('courses.index') }}"
                   class="btn btn-danger">
                    Jelajahi Kursus
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>

            <div class="col-md-5 text-center">
                <i class="bi bi-laptop hero-icon"></i>
            </div>

        </div>
    </div>
</section>

@endsection