<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Portfolio')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #102331, #1c2d3d, #2b445c);
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: transparent;
            padding: 20px 40px;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: #f87171;
        }
        .nav-link {
            color: #ffffff !important;
            margin-left: 20px;
            font-weight: 500;
        }
        .nav-link:hover {
            color: #38f9d7 !important;
        }
    </style>
    @stack('styles')
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AFRIZA</a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#pesanModal">
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/projects">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
