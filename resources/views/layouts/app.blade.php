<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="bg-primary text-white" id="sidebar" style="width: 250px; min-height: 100vh;">
            <div class="p-4">
                <h3 class="text-center mb-4">Dashboard</h3>
                <ul class="nav flex-column">
                    <li class="nav-item mb-3">
                        <a href="peminjaman" class="nav-link text-white"><i class="fas fa-home me-2"></i> Home</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a href="{{ route('ruangan.daftar') }}" class="nav-link text-white">
                            <i class="fas fa-door-open me-2"></i> Ruangan
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex-grow-1 bg-light" style="min-height: 100vh;">
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-4">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="btn btn-danger px-3" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container py-4">
                <h1 class="mb-4">@yield('title', 'Dashboard')</h1>
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="bg-blue text-black text-center py-2">
        <p class="mb-0">© Project By Fadly RPL 2©</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
