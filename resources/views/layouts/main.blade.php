<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'DEEDAT' }} - News Portal</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .navbar { background-color: #1a237e !important; }
        .navbar-brand, .nav-link { color: white !important; }
        .nav-link:hover { color: #bbdefb !important; }
        .card { transition: transform .2s; }
        .card:hover { transform: translateY(-5px); }
        .hero-section { 
            background: linear-gradient(rgba(26, 35, 126, 0.9), rgba(26, 35, 126, 0.9));
            color: white;
            padding: 4rem 0;
        }
    </style>
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <i class="fas fa-newspaper me-2"></i>DEEDAT
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/"><i class="fas fa-home me-1"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('profile*') ? 'active' : '' }}" href="{{ url('/profile') }}"><i class="fas fa-user me-1"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('berita*') ? 'active' : '' }}" href="/berita"><i class="fas fa-newspaper me-1"></i> Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contact*') ? 'active' : '' }}" href="/contact"><i class="fas fa-envelope me-1"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-4">
        @if(Request::is('/'))
            <!-- Hero Section for Homepage -->
            <div class="hero-section mb-4">
                <div class="container text-center">
                    <h1 class="display-4 fw-bold">Welcome to DEEDAT</h1>
                    <p class="lead">Discover the latest news and updates</p>
                </div>
            </div>
        @endif

        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="fas fa-newspaper me-2"></i>DEEDAT</h5>
                    <p>Your trusted source for the latest news and updates.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <h5>Follow Us</h5>
                    <a href="#" class="text-light me-3"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <small>&copy; {{ date('Y') }} DEEDAT. All rights reserved.</small>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>