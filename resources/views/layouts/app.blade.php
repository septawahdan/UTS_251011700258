<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Beranda') - Belajar Online Kita</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: #ffffff;
            color: #111827;
            font-family: Arial, sans-serif;
        }

        .navbar-custom {
            background: #111f38;
            padding: 16px 0;
        }

        .navbar-brand {
            color: #ffffff !important;
            font-size: 22px;
            font-weight: 800;
        }

        .navbar-brand span {
            color: #ff5964;
        }

        .nav-link {
            color: #ffffff !important;
            padding: 10px 14px !important;
            margin-left: 5px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
        }

        .nav-link:hover,
        .nav-link.active {
            background: #ff5964;
            color: #ffffff !important;
        }

        main {
            flex: 1;
            background: #ffffff;
        }

        .btn-danger {
            background: #ff4057;
            border-color: #ff4057;
            color: #ffffff;
            border-radius: 10px;
            font-weight: 600;
            padding: 12px 22px;
        }

        .btn-danger:hover {
            background: #dc3545;
            border-color: #dc3545;
        }

        .footer-custom {
            background: #111f38;
            color: #ffffff;
            padding: 25px 0;
            margin-top: 0;
        }

        .footer-custom p {
            color: #d1d5db;
            font-size: 13px;
            margin: 5px 0 0;
        }

        .footer-brand {
            font-size: 18px;
            font-weight: 800;
        }

        .footer-brand span {
            color: #ff5964;
        }

        @media (max-width: 991px) {
            .nav-link {
                margin: 4px 0;
            }

            .navbar-collapse {
                padding-top: 12px;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">

        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="bi bi-mortarboard-fill"></i>
            Belajar <span>Online Kita</span>
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                       href="{{ route('home') }}">
                        <i class="bi bi-house-fill"></i> Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('courses.*') ? 'active' : '' }}"
                       href="{{ route('courses.index') }}">
                        <i class="bi bi-book-half"></i> Kursus
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                       href="{{ route('about') }}">
                        <i class="bi bi-info-circle-fill"></i> Tentang
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('profil') ? 'active' : '' }}"
                       href="{{ route('profil') }}">
                        <i class="bi bi-person-fill"></i> Profil
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="footer-custom">
    <div class="container d-flex flex-wrap justify-content-between align-items-center gap-3">

        <div>
            <div class="footer-brand">
                Belajar <span>Online Kita</span>
            </div>
            <p>Platform belajar online dengan harga terjangkau.</p>
        </div>

        <small>
            <i class="bi bi-mortarboard-fill"></i>
            Belajar, Berkembang, Berprestasi.
        </small>

    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')

</body>
</html>