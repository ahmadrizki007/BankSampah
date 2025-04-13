@props(['title' => 'Bank Sampah'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }}</title>

        <!-- JQUERY -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

        <!-- Favicon -->
        <link rel="shortcut icon" href={{ asset("asset/logo.png") }} type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400..700&display=swap" rel="stylesheet">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles      

        <script>
            if (localStorage.getItem('dark-mode') === 'false' || !('dark-mode' in localStorage)) {
                document.querySelector('html').classList.remove('dark');
                document.querySelector('html').style.colorScheme = 'light';
            } else {
                document.querySelector('html').classList.add('dark');
                document.querySelector('html').style.colorScheme = 'dark';
            }
        </script>

        <!-- DataTables CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css">

        <!-- DataTables JS (pindahkan ke bawah jQuery jika perlu) -->
        <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>

        @stack('head')

    </head>
    <body
        class="font-[Roboto] antialiased bg-gray-100 dark:bg-gray-900 text-gray-600 dark:text-gray-400"
        :class="{ 'sidebar-expanded': sidebarExpanded }"
        x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
        x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"    
    >

        @stack('scripts')

        <script>
            if (localStorage.getItem('sidebar-expanded') == 'true') {
                document.querySelector('body').classList.add('sidebar-expanded');
            } else {
                document.querySelector('body').classList.remove('sidebar-expanded');
            }
        </script>

        <!-- Page wrapper -->
        <div class="flex h-[100dvh] overflow-hidden">

            <x-admin.sidebar :variant="$attributes['sidebarVariant']" />

            <!-- Content area -->
            <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden @if($attributes['background']){{ $attributes['background'] }}@endif" x-ref="contentarea">

                <x-admin.header :variant="$attributes['headerVariant']" />

                <main class="grow">
                    {{ $slot }}
                </main>

            </div>
        </div>


        @livewireScriptConfig

    </body>
</html>
