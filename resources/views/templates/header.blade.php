<!-- Header -->
<header class="header bg-[#276561]">
    <div class="logo">
        <img src={{ asset("asset/logo.png") }} alt="Logo Bank Sampah">
    </div>
    <nav class="nav">
        <ul>
            <li><a href="/beranda">Beranda</a></li>
            <li><a href="/about">Tentang Kami</a></li>
            <li><a href="/produk">Produk</a></li>
            <li><a href="#">Kunjungan</a></li>
        </ul>
    </nav>
    <button class="login-btn">Login</button>
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