<!-- Header -->
<header class="header bg-[#276561]">
    <div class="logo">
        <img src={{ asset("asset/logo.png") }} alt="Logo Bank Sampah">
    </div>

    <!-- Hamburger Icon (untuk tampilan mobile) -->
    <div class="lg:hidden flex items-center" id="hamburger">
        <button class="text-white p-2">
            <span class="block w-6 h-0.5 bg-white mb-1"></span>
            <span class="block w-6 h-0.5 bg-white mb-1"></span>
            <span class="block w-6 h-0.5 bg-white"></span>
        </button>
    </div>

    <nav class="nav">
        <ul class="lg:flex hidden">
            <li><a href="/" class="nav-link">Beranda</a></li>
            <li><a href="/tentang-kami" class="nav-link">Tentang Kami</a></li>
            <li><a href="/produk" class="nav-link">Produk</a></li>
            <li><a href="/kunjungan" class="nav-link">Kunjungan</a></li>
        </ul>
    </nav>
     <!-- Login Button -->
    <a href="{{ route('login') }}" class="login-btn">Login</a>
    
</header>

<!-- Mobile Navigation Menu -->
<div class="mobile-nav hidden lg:hidden" id="mobile-menu">
    <ul>
        <li><a href="/">Beranda</a></li>
        <li><a href="/tentang-kami">Tentang Kami</a></li>
        <li><a href="/produk">Produk</a></li>
        <li><a href="/kunjungan">Kunjungan</a></li>
        <li><a href="{{ route('login') }}" class="login-btn">Login</a></li>
    </ul>
</div>

<script>
    $(document).ready(function () {
        // Menentukan tanda active di awal load halaman
        let path = window.location.pathname;
        $('nav ul li a').each(function () {
            if ($(this).attr('href') == path) {
                $(this).addClass('active');
            }
        });

        // Menangani klik pada hamburger icon
        $('#hamburger').on('click', function () {
            // Menampilkan/menyembunyikan menu mobile
            $('#mobile-menu').toggleClass('hidden');
            
            // Menambahkan animasi pada hamburger icon
            $(this).toggleClass('tham-active');
        });
    });
</script>

