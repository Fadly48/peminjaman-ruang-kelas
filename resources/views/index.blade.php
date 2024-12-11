<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>@yield('title', 'Web Peminjaman Kelas')</title>
    <style>
        body {
            background: url('img/bg1.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="container flex items-center justify-between px-6 py-4 mx-auto">
            <a class="text-2xl font-bold text-blue-600 transition duration-300 hover:text-blue-800">Website Peminjaman Ruang Kelas</a>
            <div class="flex space-x-6">
                <a class="text-gray-700 transition duration-300 hover:text-blue-500" href="{{ route('login') }}">Login</a>
                <a class="text-gray-700 transition duration-300 hover:text-blue-500" href="{{ route('register') }}">Register</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="py-4 mt-10 text-center bg-gray-100">
        <div class="text-gray-600">
            © Fadly Project ©
        </div>
    </footer>
</body>
</html>
