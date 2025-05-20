@props(['title' => 'Bank Sampah'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description"
        content="Bank Sampah - ♻️ Konsultan lingkungan berbasis wilayah | 🐘 Yayasan RISG | 🏆 Kalpataru 2020, UGM Award 2021 | 🤝 MoU: DLH Metro, CCEP, BNI,Itera">

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

        <!-- Select2 -->
         <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        @stack('head')

    </head>
    <body
        class="font-[Roboto] antialiased bg-gray-100 dark:bg-gray-900 text-gray-600 dark:text-gray-400"
        :class="{ 'sidebar-expanded': sidebarExpanded }"
        x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
        x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"    
    >

        <script>
            if (localStorage.getItem('sidebar-expanded') == 'true') {
                document.querySelector('body').classList.add('sidebar-expanded');
            } else {
                document.querySelector('body').classList.remove('sidebar-expanded');
            }
        </script>

        <!-- Page wrapper -->
        <div class="flex h-[100dvh] overflow-hidden">
                <!-- Error notif -->
            @error('error')
                <x-errors.red :message="$message" />
            @enderror

            <!-- Success notif -->
            @if(session('success'))
                <x-errors.green :message="session('success')" />
            @endif

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
        @stack('scripts')

         <script>
            // magic attribute alpine ($rupiah)
            document.addEventListener('alpine:init', () => {
                Alpine.magic('rupiah', () => (value) => {
                    return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')
                });

                Alpine.data('formatter', () => ({
                    amount: '',
                    // Formatter dynamic dot currency
                    formatter(event) {
                        // remove non digit character
                        this.amount = this.amount.replace(/[^\d]/g, '')

                        // formatting input with dot format money
                        this.amount = this.amount.replace(/\B(?=(\d{3})+(?!\d))/g, '.')
                    },  
                }));
            })
        </script>

    </body>
</html>
