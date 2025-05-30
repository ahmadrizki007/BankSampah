<div class="min-w-fit">
    <!-- Sidebar backdrop (mobile only) -->
    <div class="fixed inset-0 bg-gray-900/30 z-40 lg:hidden lg:z-auto transition-opacity duration-200"
        :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak></div>

    <!-- Sidebar -->
    <div id="sidebar"
        class=" flex lg:flex! flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-[100dvh] overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:w-64 2xl:w-64 shrink-0 bg-primary-300 dark:bg-gray-800 p-4 transition-all duration-200 ease-in-out {{ $variant === 'v2' ? 'border-r border-gray-200 dark:border-gray-700/60' : 'shadow-xs' }}"
        :class="sidebarOpen ? 'max-lg:translate-x-0' : 'max-lg:-translate-x-64'" @click.outside="sidebarOpen = false"
        @keydown.escape.window="sidebarOpen = false">

        <!-- Sidebar header -->
        <div class="flex justify-center pr-3 sm:px-2">
            <!-- Close button -->
            <button class="lg:hidden text-gray-500 hover:text-gray-400" @click.stop="sidebarOpen = !sidebarOpen"
                aria-controls="sidebar" :aria-expanded="sidebarOpen">
                <span class="sr-only">Close sidebar</span>
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
                </svg>
            </button>
            <!-- Logo -->
            <a class="pb-8 block" href="{{ route('admin.dashboard') }}">
                <img class="h-16 w-auto" src="{{ asset('svg_asset/admin_logo.svg') }}" alt="Logo" />
            </a>
        </div>

        <div class="space-y-8">
            <!-- Pages group -->
            <div>
                <h3 class="italic text-black/50 dark:text-white font-thin pb-2">
                    <span class="pl-4 hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6"
                        aria-hidden="true">•••</span>
                    <span class="lg:hidden lg:sidebar-expanded:block 2xl:block ms-2">Kelola Menu</span>
                </h3>
                <ul class="mt-3">
                    <!-- Dashboard -->
                    <li
                        class="pl-4 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-linear-to-r truncate transition hover:bg-primary-btn-hover @if(Request::segment(2) == 'dashboard'){{ 'bg-black/10' }}@endif">
                        <a class="block text-gray-800 dark:text-gray-100" href="{{ route('admin.dashboard') }}"
                            @click="sidebarExpanded = true">
                            <div class="flex items-center">
                                <img class="shrink-0 w-7" src="{{ asset('svg_asset/dashboard-admin.svg') }}"
                                    alt="dashboard">
                                <span
                                    class="text-sm font-medium ml-4 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dashboard</span>
                            </div>
                        </a>
                    </li>

                    <!-- Formulir -->
                    <li
                        class="pl-4 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-linear-to-r truncate transition hover:bg-primary-btn-hover @if(Request::segment(2) == 'formulir'){{ 'bg-black/10' }}@endif">
                        <a class="block text-gray-800 dark:text-gray-100" href="{{ route('admin.formulir') }}"
                            @click="sidebarExpanded = true">
                            <div class="flex items-center">
                                <img class="shrink-0 w-7" src="{{ asset('svg_asset/formulir-admin.svg') }}" alt="formulir">
                                <span
                                    class="text-sm font-medium ml-4 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Formulir</span>
                            </div>
                        </a>
                    </li>

                    <!-- Data Transaki -->
                    <li
                        class="pl-4 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-linear-to-r truncate transition hover:bg-primary-btn-hover @if(Request::segment(2) == 'data-transaksi'){{ 'bg-black/10' }}@endif">
                        <a class="block text-gray-800 dark:text-gray-100" href="{{ route('admin.dataTransaksi') }}"
                            @click="sidebarExpanded = true">
                            <div class="flex items-center">
                                <img class="shrink-0 w-6" src="{{ asset('svg_asset/data-transaksi.svg') }}"
                                    alt="data-transaksi">
                                <span
                                    class="text-sm font-medium ml-4 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    Data Transaksi
                                </span>
                            </div>
                        </a>
                    </li>

                    <!-- Data Sampah -->
                    <li
                        class="pl-4 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-linear-to-r truncate transition hover:bg-primary-btn-hover @if(Request::segment(2) == 'data-sampah'){{ 'bg-black/10 ' }}@endif">
                        <a class="block text-gray-800 dark:text-gray-100 " href="{{ route('admin.dataSampah') }}"
                            @click="sidebarExpanded = true">
                            <div class="flex items-center">
                                <img class="shrink-0 w-6" src="{{ asset('svg_asset/data-sampah.svg') }}" alt="data-sampah">
                                <span
                                    class="text-sm font-medium ml-4 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    Data Sampah
                                </span>
                            </div>
                        </a>
                    </li>

                    <!-- Validasi Penarikan -->
                    <li
                        class="pl-4 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-linear-to-r truncate transition hover:bg-primary-btn-hover @if(Request::segment(2) == 'validasi-penarikan'){{ 'bg-black/10 ' }}@endif">
                        <a class="block text-gray-800 dark:text-gray-100 " href="{{ route('admin.validasiPenarikan') }}"
                            @click="sidebarExpanded = true">
                            <div class="flex items-center">
                                <img class="shrink-0 w-6" src="{{ asset('svg_asset/validasi-penarikan.svg') }}"
                                    alt="validasi-penarikan">
                                <span
                                    class="text-sm font-medium ml-4 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    Validasi Penarikan
                                </span>
                            </div>
                        </a>
                    </li>

                    <!-- Donasi Gajah -->
                    <li
                        class="pl-4 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-linear-to-r truncate transition hover:bg-primary-btn-hover @if(Request::segment(2) == 'donasi-gajah'){{ 'bg-black/10 ' }}@endif">
                        <a class="block text-gray-800 dark:text-gray-100 " href="{{ route('admin.donasiGajah') }}"
                            @click="sidebarExpanded = true">
                            <div class="flex items-center">
                                <img class="shrink-0 w-7" src="{{ asset('svg_asset/donasi-gajah.svg') }}"
                                    alt="donasi-gajah">
                                <span
                                    class="text-sm font-medium ml-4 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    Donasi Gajah
                                </span>
                            </div>
                        </a>
                    </li>
                </ul>

                <h3 class="italic text-black/50 dark:text-white font-thin pb-2 mt-6">
                    <span class="pl-4 hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6"
                        aria-hidden="true">•••</span>
                    <span class="lg:hidden lg:sidebar-expanded:block 2xl:block ms-2">Kelola Halaman</span>
                </h3>

                <ul>
                    <!-- Produk -->
                    <li
                        class="pl-4 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-linear-to-r truncate transition hover:bg-primary-btn-hover @if(Request::segment(2) == 'produk'){{ 'bg-black/10' }}@endif">
                        <a class="block text-gray-800 dark:text-gray-100" href="{{ route('admin.produk') }}"
                            @click="sidebarExpanded = true">
                            <div class="flex items-center">
                                <img class="shrink-0 w-7" src="{{ asset('svg_asset/produk-admin.svg') }}" alt="produk">
                                <span
                                    class="text-sm font-medium ml-4 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Produk</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Expand / collapse button -->
        <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
            <div class="w-12 pl-4 pr-3 py-2">
                <button @click="sidebarExpanded = !sidebarExpanded">
                    <span class="sr-only">Expand / collapse sidebar</span>
                    <svg class="shrink-0 fill-current text-white hover:text-black/50 dark:text-white sidebar-expanded:rotate-180"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <path
                            d="M15 16a1 1 0 0 1-1-1V1a1 1 0 1 1 2 0v14a1 1 0 0 1-1 1ZM8.586 7H1a1 1 0 1 0 0 2h7.586l-2.793 2.793a1 1 0 1 0 1.414 1.414l4.5-4.5A.997.997 0 0 0 12 8.01M11.924 7.617a.997.997 0 0 0-.217-.324l-4.5-4.5a1 1 0 0 0-1.414 1.414L8.586 7M12 7.99a.996.996 0 0 0-.076-.373Z" />
                    </svg>
                </button>
            </div>
        </div>

    </div>
</div>