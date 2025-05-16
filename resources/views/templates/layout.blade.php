<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('title')

    <!-- SEO -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Bank Sampah - ♻️ Konsultan lingkungan berbasis wilayah | 🐘 Yayasan RISG | 🏆 Kalpataru 2020, UGM Award 2021 | 🤝 MoU: DLH Metro, CCEP, BNI,Itera">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/7191805df1.js" crossorigin="anonymous"></script>

    <!-- JQUERY -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <!-- CSS script -->
    <link rel="stylesheet" href={{ asset("css/style.css")}}>

    <!-- Favicon -->
    <link rel="shortcut icon" href={{ asset("favicon.ico") }} type="image/x-icon">

    <!-- Font Link -->
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&family=Poppins:wght@700&family=Caveat:wght@400&display=swap"
        rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif


    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css">

    <!-- DataTables JS (pindahkan ke bawah jQuery jika perlu) -->
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
</head>

<body class="mx-auto relative text-white overflow-x-hidden">

    <!-- Error notif -->
    @error('error')
        <x-errors.red :message="$message" />
    @enderror

    <!-- Success notif -->
    @if(session('success'))
        <x-errors.green :message="session('success')" />
    @endif

    @include('templates.header')

    <div class="bg-white">
        @yield('main')
    </div>

    <!-- SEO -->
    <h1 class="hidden">
        Bank Sampah
        <h2 class="hidden">
            Bank Sampah Sahabat Gajah
        </h2>
    </h1>


    @include('templates.footer')

    @livewireScriptConfig
    @yield('scripts')

    <script>
        // magic attribute alpine ($rupiah)
        document.addEventListener('alpine:init', () => {
            Alpine.magic('rupiah', () => (value) => {
                return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')
            })
        })
    </script>


</body>

</html>