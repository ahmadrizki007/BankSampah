<!-- Header -->
<header class="header bg-primary-500">
    <div class="logo">
        <img src={{ asset("asset/logo.png") }} alt="Logo Bank Sampah">
    </div>
    <nav class="nav">
        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="/tentang-kami">Tentang Kami</a></li>
            <li><a href="/produk">Produk</a></li>
            <li><a href="#">Kunjungan</a></li>
        </ul>
    </nav>

    <!-- DROPDOWN Profile -->
    @if (Auth::check())
        <x-dropdown align="right" contentClasses="divide-y divide-gray-200">
            <x-slot name="trigger">

                <button
                    class="flex items-center px-3 py-2 text-white text-sm font-medium rounded-md hover:text-[#BCC8A2] transition duration-150">
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
                        <a href="#Menu"
                            class="flex items-center px-3 py-2 text-black text-sm font-medium rounded-md hover:text-[#BCC8A2] transition duration-150">Menu</a>
                    </li>
                    <li>
                        <a href="{{ route('profile') }}"
                            class="flex items-center px-3 py-2 text-black text-sm font-medium rounded-md hover:text-[#BCC8A2] transition duration-150">Profile</a>

                    </li>
                </ul>

                <div>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="flex items-center px-3 py-2 text-black text-sm font-medium rounded-md hover:text-[#BCC8A2] transition duration-150">Logout</button>
                    </form>

                </div>
            </x-slot>
        </x-dropdown>
    @else
        <a href="{{ route('login') }}" class="login-btn">Login</a>

    @endif


</header>

<script>

    $(document).ready(function () {
        // menentukan tanda active di awal load halaman
        let path = window.location.pathname;
        $('nav ul li a').each(function () {
            if ($(this).attr('href') == path) {
                $(this).addClass('active');
            }
        })
    });
</script>