<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-gray-100">

    <!-- Main Container -->
    <div class="flex" id="wrapper">

        <!-- Sidebar -->
        <div class="w-64 min-h-screen text-white shadow-lg bg-gradient-to-b from-blue-600 to-blue-400" id="sidebar">
            <div class="p-6">
                <h3 class="mb-6 text-3xl font-bold text-center">Dashboard</h3>
                <ul class="space-y-4">
                    <li class="nav-item">
                        <a href="{{ route('peminjaman.index') }}" class="flex items-center p-3 text-lg text-white transition duration-300 ease-in-out rounded-lg hover:bg-blue-500">
                            <i class="mr-3 fas fa-calendar-alt"></i> Peminjaman
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('ruangan.index') }}" class="flex items-center p-3 text-lg text-white transition duration-300 ease-in-out rounded-lg hover:bg-blue-500">
                            <i class="mr-3 fas fa-door-open"></i> Ruangan
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 min-h-screen bg-gray-50">
            <!-- Navbar -->
            <nav class="px-6 py-4 bg-white shadow-md">
                <div class="flex items-center justify-between">
                    <button class="text-gray-600 lg:hidden" type="button" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('index') }}" class="px-6 py-2 text-white transition duration-300 bg-red-600 rounded-md hover:bg-red-700">Logout</a>
                    </div>
                </div>
            </nav>

            <!-- Content Section -->
            <div class="container px-6 py-8">
                <h1 class="mb-6 text-3xl font-semibold text-gray-800">@yield('title')</h1>
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-4 mt-12 text-center text-white bg-blue-600">
        <p class="mb-0 text-lg">© Project By Fadly RPL 2</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
