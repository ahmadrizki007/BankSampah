<!-- Header -->
<header class="flex sm:flex-row flex-row-reverse items-center justify-between sticky top-0 bg-primary-500 px-5 lg:px-14 md:px-8 py-5 z-20">
    <div class="sm:max-w-28,5 max-w-20">
        <a href="{{ route('/') }}">
            <img src={{ asset("asset/logo.png") }} alt="Logo Bank Sampah">
        </a>
    </div>

    <nav 
    x-data="{ path: window.location.pathname }"
    class="nav sm:block hidden">
        <ul class="flex gap-8 list-none">
            <li><a href="/" :class="{ 'active': path === '/' }">Beranda</a></li>
            <li><a href="/tentang-kami" :class="{ 'active': path === '/tentang-kami' }" >Tentang Kami</a></li>
            <li><a href="/produk" :class="{ 'active': path === '/produk' }" >Produk</a></li>
            <li><a href="/kunjungan" :class="{ 'active': path === '/kunjungan' }" >Kunjungan</a></li>
        </ul>
    </nav>

    <div x-data="{ open: false }" @keydown.window.escape="open = false" class="sm:hidden block">
        <!-- Overlay untuk menutup sidebar saat klik di luar -->
        <div x-show="open" @click="open = false" class="fixed inset-0 bg-black bg-opacity-50 z-40" x-transition.opacity>
        </div>

        <!-- Button Open Sidebar -->
        <button @click="open = true" class="text-lg relative z-50">
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- Sidebar -->
        <div x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="translate-x-0 opacity-100"
            x-transition:leave-end="-translate-x-full opacity-0"
            class="fixed inset-y-0 left-0 bg-primary-500 w-72 py-6 px-5 shadow-lg z-50">

            <!-- Button Close Sidebar -->
           <div class="flex justify-between items-center text-black">
            <button @click="open = false" class="text-white text-xl">
                <i class="fa-solid fa-xmark"></i>
            </button>

            @if (Auth::check())
                <!-- Belum selesai -->
                <x-dropdown align="right" contentClasses="divide-y divide-gray-200">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center px-3 py-2 text-white text-sm font-medium rounded-md hover:text-primary-hover transition duration-150">
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="w-4 h-4 ml-1 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <div class="px-4 py-3 text-sm">
                            <div>
                                {{ Auth::user()->name }}
                            </div>
                            <div class="font-medium truncate">
                                {{ Auth::user()->email }}
                            </div>
                        </div>
                        <ul class="py-2 text-sm">
                            <li>
                                <a href="{{ route('dashboard') }}"
                                    class="flex items-center px-3 py-2 text-black text-sm font-medium rounded-md hover:text-primary-hover transition duration-150">Menu</a>
                            </li>
                            <li>
                                <a href="{{ route('profile') }}"
                                    class="flex items-center px-3 py-2 text-black text-sm font-medium rounded-md hover:text-primary-hover transition duration-150">Profile</a>
                            </li>
                        </ul>
                        <div>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="flex items-center px-3 py-2 text-black text-sm font-medium rounded-md hover:text-primary-hover transition duration-150">Logout</button>
                            </form>
                        </div>
                    </x-slot>
                </x-dropdown>
            @endif
           </div>

            <!-- Menu -->
            <ul class="mt-4 text-white">
                <li><a href="/" class="block py-2">Beranda</a></li>
                <li><a href="/tentang-kami" class="block py-2">Tentang Kami</a></li>
                <li><a href="/produk" class="block py-2">Produk</a></li>
                <li><a href="/kunjungan" class="block py-2">Kunjungan</a></li>
                <li>
                    @if (!Auth::check())
                        <a href="{{ route('login') }}" class="block py-2 ">Login</a>
                    @endif

                </li>
            </ul>
        </div>
    </div>
    <!-- DROPDOWN Profile -->
    @if (Auth::check())
        <!-- Belum selesai -->
                <div class="sm:block hidden">
                    <x-dropdown align="right" contentClasses="divide-y divide-gray-200 text-black">
                        <x-slot name="trigger">
                            <button
                                class="flex items-center px-3 py-2 text-white text-sm font-medium rounded-md hover:text-primary-hover transition duration-150">
                                <span>{{ Auth::user()->name }}</span>
                                <svg class="w-4 h-4 ml-1 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <div class="px-4 py-3 text-sm">
                                <div>
                                    {{ Auth::user()->name }}
                                </div>
                                <div class="font-medium truncate">
                                    {{ Auth::user()->email }}
                                </div>
                            </div>
                            <ul class="py-2 text-sm">
                                <li>
                                    <a href="{{ route('dashboard') }}"
                                        class="flex items-center px-3 py-2 text-black text-sm font-medium rounded-md hover:text-primary-hover transition duration-150">Menu</a>
                                </li>
                                <li>
                                    <a href="{{ route('profile') }}"
                                        class="flex items-center px-3 py-2 text-black text-sm font-medium rounded-md hover:text-primary-hover transition duration-150">Profile</a>
                                </li>
                            </ul>
                            <div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="flex items-center px-3 py-2 text-black text-sm font-medium rounded-md hover:text-primary-hover transition duration-150">Logout</button>
                                </form>
                            </div>
                        </x-slot>
                    </x-dropdown>
                </div>
    @else
        <a href="{{ route('login') }}" class="sm:block hidden bg-transparent border border-white rounded-3xl py-2 px-5 cursor-pointer transition-colors duration-300 ease-linear hover:bg-white hover:text-primary-500">Login</a>
    @endif
</header>

