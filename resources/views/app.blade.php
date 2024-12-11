<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>@yield('title', $title)</title>
    <style>
        body {
            background: url('img/bg1.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body>
    <body class="flex items-center justify-center h-screen bg-gray-100">
        @yield('content')
    </div>
</body>

</html>
