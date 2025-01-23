<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('title')

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/7191805df1.js" crossorigin="anonymous"></script>

    <!-- JQUERY -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <!-- CSS script -->
    <link rel="stylesheet" href={{ asset("css/style.css")}}>

    <!-- Favicon -->
    <link rel="shortcut icon" href={{ asset("asset/logo.png") }} type="image/x-icon">

    <!-- Font Link -->
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&family=Poppins:wght@700&display=swap"
        rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>

    @yield('main')

    @yield('scripts')

</body>

</html>