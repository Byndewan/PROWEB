<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Progress - Parallax</title>
    <link rel="stylesheet" href="{{ asset('dist/css/iziToast.min.css') }}">
    <script src="{{ asset('dist/js/iziToast.min.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <style>
        body {
            font-family: 'Comfortaa', sans-serif;
            scroll-behavior: smooth;
            background-color: #f8f9fa;
            color: #000;
        }
        /* Navbar */
        .navbar {
            transition: background 0.3s ease-in-out;
        }
        .navbar.scrolled {
            background: rgba(0, 0, 0, 0.8) !important;
        }
        .navbar a {
            color: white !important;
        }
        /* Hero Section */
        .hero {
            height: 100vh;
            background: url('uploads/2.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        .hero * {
            position: relative;
            z-index: 2;
        }
        /* Parallax */
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            font-size: 2rem;
        }
        .parallax-1 {
            background-image: url('uploads/1.jpg');
        }
        .parallax-2 {
            background-image: url('uploads/1.jpg');
        }
        /* Content */
        .content {
            padding: 80px 20px;
            text-align: center;
        }
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        /* Footer */
        .footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Progress Report</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Fitur</a></li>
                    @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('front.login') }}">Login</a></li>
                    @endguest
                    @auth
                    <li class="nav-item"><a class="nav-link" href="{{ route('front.dashboard') }}">Dashboard</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero">
        <div>
            <h1 id="typed-text" class="display-4 fw-bold">Sistem Laporan Progress</h1>
            <p class="lead" style="font-size: 1.5em">Pantau dan evaluasi progress tim dengan mudah dan efisien.</p>
            <a href="#features" class="btn btn-light btn-lg mt-3">Jelajahi</a>
        </div>
    </header>

    <!-- About Section -->
    <section class="content fade-in" id="about">
        <h2>Tentang Aplikasi</h2>
        <p>Aplikasi ini membantu tim dalam mencatat dan mengevaluasi perkembangan proyek mereka secara sistematis.</p>
    </section>

    <div class="parallax parallax-1">
        "Efisiensi dan Transparansi dalam Satu Platform!"
    </div>

    <!-- Features Section -->
    <section class="content fade-in" id="features">
        <h2 class="mb-3">Fitur Utama</h2>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <h4>📊 Monitoring Progress</h4>
                <p>Pantau perkembangan proyek secara real-time.</p>
            </div>
            <div class="col-md-3">
                <h4>🔍 Transparansi Data</h4>
                <p>Semua anggota tim dapat melihat laporan dan pembaruan.</p>
            </div>
            <div class="col-md-3">
                <h4>📁 Dokumentasi Lengkap</h4>
                <p>Catat setiap pencapaian dan kendala yang dihadapi.</p>
            </div>
        </div>
    </section>

    <div class="parallax parallax-2">
        "Inovasi dalam Setiap Langkah!"
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Progress Report. All Rights Reserved.</p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Efek Fade-in
            document.querySelectorAll(".fade-in").forEach(el => {
                el.style.opacity = 0;
                el.style.transform = "translateY(20px)";
                setTimeout(() => {
                    el.style.transition = "opacity 0.8s ease-out, transform 0.8s ease-out";
                    el.style.opacity = 1;
                    el.style.transform = "translateY(0)";
                }, 300);
            });

            // Navbar transparan saat di-scroll
            window.addEventListener("scroll", function() {
                const navbar = document.querySelector(".navbar");
                if (window.scrollY > 50) {
                    navbar.classList.add("scrolled");
                } else {
                    navbar.classList.remove("scrolled");
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
        new Typed("#typed-text", {
            strings: ["Sistem Laporan Progress", "Monitoring Progress"], // Teks yang diketik
            typeSpeed: 100,  // Kecepatan mengetik (ms per karakter)
            backSpeed: 100,  // Kecepatan menghapus (ms per karakter)
            startDelay: 500, // Delay sebelum mulai mengetik (ms)
            backDelay: 1500, // Delay sebelum mulai menghapus (ms)
            loop: true       // Agar efek mengetik berulang terus
        });
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                iziToast.show({
                    message: '{{ $error }}',
                    color: 'red',
                    position: 'topRight',
                });
            </script>
        @endforeach
    @endif

    @if (session('success'))
        <script>
            iziToast.show({
                message: '{{ session("success") }}',
                color: 'blue',
                position: 'topRight',
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            iziToast.show({
                message: '{{ session("error") }}',
                color: 'red',
                position: 'topRight',
            });
        </script>
    @endif

</body>
</html>
