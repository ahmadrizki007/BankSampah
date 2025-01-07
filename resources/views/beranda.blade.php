<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Sampah Sahabat Gajah</title>
    <link rel="stylesheet" href={{ asset("css/style.css")}}>

    <!-- Font Link -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&family=Poppins:wght@700&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
</head>
<body>
    <!-- Header -->
    <header class="header bg-[#276561]">
        <div class="logo">
            <img src={{ asset("asset/logo.png") }} alt="Logo Bank Sampah"> 
        </div>
        <nav class="nav">
            <ul>
                <li><a href="#" class="active">Beranda</a></li>
                <li><a href="/about">Tentang Kami</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Kunjungan</a></li>
            </ul>
        </nav>
        <button class="login-btn">Login</button>
    </header>

    <!-- Hero Section -->
    <main class="hero">
        <!-- Segitiga Kiri Bawah -->
        <div class="triangle-left"></div>

        <div class="hero-content">
            <div class="reuse-image">
                <img src={{ asset("asset/RE.png") }} alt="REUSE REDUCE RECYCLE">
            </div>
            <p class="description">
                Selamat Datang di Bank Sampah Sahabat Gajah,<br>
                Melindungi Gajah dan Melindungi Alam
            </p>
            <button class="cta-btn">Selengkapnya</button>
        </div>
        <div class="hero-image">
            <img src= {{asset("asset/icon_1.png")}} alt="Ilustrasi Recycle">
        </div>

<!-- Ayo Bergabung -->
        <!-- Segitiga Kanan Atas -->
        <div class="triangle-right"></div>
    </main>
    <!-- Section Bergabung -->
<section class="join-section">
    <!-- Kotak Langkah-Langkah -->
    <div class="steps">
        <div class="step-box step-green">
            <span class="step-text bold">Pilah</span> <span class="step-text">Jenisnya</span>
        </div>
        <div class="step-box step-white">
            <span class="step-text bold">Kemas</span> <span class="step-text">Rapih</span>
        </div>
        <div class="step-box step-green">
            <span class="step-text bold">Setor</span> <span class="step-text">Sampahnya</span>
        </div>
    </div>

    <!-- Gambar Tengah -->
    <div class="elephant-image">
        <img src={{ asset("asset/gajah.png") }} alt="Gajah Menggemaskan">
    </div>

    <!-- Teks Ajak Bergabung -->
    <div class="join-text">
        <h2>Ayo Bergabung <br><span>untuk Pengelolaan Sampah yang Lebih Baik!</span></h2>
        <p>
            Ambil bagian dalam upaya melestarikan lingkungan dengan bertanggung jawab atas sampah yang Anda hasilkan 
            melalui Bank Sampah Sahabat Gajah. Ikuti langkah mudah ini untuk mulai berkontribusi.
        </p>
        <button class="join-btn">Bergabung Sekarang</button>
    </div>
</section>

<!-- Pencapaian Kami -->
<section class="achievement-section">
    <div class="triangle-right-top"></div> <!-- Segitiga atas kanan -->
    <h2 class="achievement-title">PENCAPAIAN KAMI</h2>
    <div class="achievement-boxes">
        <div class="achievement-box">
            <h3>22</h3>
            <p>Bank Sampah Unit</p>
        </div>
        <div class="achievement-box">
            <h3>7</h3>
            <p>Unit Usaha</p>
        </div>
        <div class="achievement-box">
            <h3>30</h3>
            <p>Program Pendampingan</p>
        </div>
    </div>
</section>

<!-- Keuntungan -->
<section class="benefit-section">
    <h2 class="benefit-title">KEUNTUNGAN</h2>
    <div class="benefit-container">
        <!-- Kotak 1 -->
        <div class="benefit-box">
            <div class="content">
                <h3>Sampah Terkelola</h3>
                <p>Sampah akan dikelola secara bertanggung jawab dan mengurangi jumlah sampah yang berakhir di TPA.</p>
            </div>
            <div class="icon">
                <i class="MdRecycling"></i>
            </div>
        </div>

        <!-- Kotak 2 -->
        <div class="benefit-box">
            <div class="content">
                <h3>Pemberdayaan Masyarakat</h3>
                <p>Masyarakat diajak terlibat langsung dan sambil menggali potensi yang dimiliki.</p>
            </div>
            <div class="icon">
                <i class="AiOutlineHome"></i>
            </div>
        </div>

        <!-- Kotak 3 -->
        <div class="benefit-box">
            <div class="content">
                <h3>Praktis dan Mudah</h3>
                <p>Cukup pilah dan bersihkan sampah Anda di rumah dan setorkan kepada kami.</p>
            </div>
            <div class="icon">
                <i class="AiOutlineFieldTime"></i>
            </div>
        </div>

        <!-- Kotak 4 -->
        <div class="benefit-box">
            <div class="content">
                <h3>Apresiasi Reward</h3>
                <p>Masyarakat yang menyetorkan sampah akan mendapatkan reward dalam bentuk tabungan.</p>
            </div>
            <div class="icon">
                <i class="AiOutlineGift"></i>
            </div>
        </div>
    </div>
    <!-- Segitiga Kiri Bawah -->
    <div class="triangle-left-bottom"></div>
</section>

<!-- Cara Menyiapkan Sampah -->
<section class="prepare-section">
    <h2 class="prepare-title">CARA MENYIAPKAN SAMPAH</h2>
    <div class="prepare-container">
        <!-- Kolom Kiri -->
        <div class="prepare-left">
            <div class="prepare-box">
                <h3>1. Bersihkan Sampah</h3>
                <p>Pastikan sampah yang akan dikirim dalam keadaan bersih guna menghindari penyebaran kuman.</p>
            </div>
            <div class="prepare-box">
                <h3>2. Pastikan Sampah Kering</h3>
                <p>Sampah yang akan dikirimkan harus dalam keadaan kering, tidak basah, atau pun lembab.</p>
            </div>
        </div>

        <!-- Gambar Tengah -->
        <div class="prepare-image">
            <img src= {{ asset("asset/G0.png") }} alt="Protecting the Environment">
        </div>

        <!-- Kolom Kanan -->
        <div class="prepare-right">
            <div class="prepare-box">
                <h3>3. Remas dan Lipat</h3>
                <p>Remas dan lipat sampah untuk memaksimalkan ruang dan volume pengiriman.</p>
            </div>
            <div class="prepare-box">
                <h3>4. Kemas Rapi</h3>
                <p>Kemas sampah menggunakan kardus atau kemasan lain.</p>
            </div>
        </div>
    </div>
</section>

<!-- Partner -->
<section class="partner-section">
    <h2 class="partner-title">Partner</h2>
    <div class="partner-container">
        <div class="partner-box">
            <img src={{ asset("asset/G1.jpg") }} alt="Partner 1">
        </div>
        <div class="partner-box">
            <img src={{ asset("asset/G2.jpg") }} alt="Partner 2">
        </div>
        <div class="partner-box">
            <img src={{ asset("asset/G3.png") }} alt="Partner 3">
        </div>
        <div class="partner-box">
            <img src={{ asset("asset/G4.jpg") }} alt="Partner 4">
        </div>
    </div>
    <!-- Segitiga Kiri Bawah -->
    <div class="triangle-left-bottom"></div>
</section>

<!-- Donasi -->
<section class="donation-section">
    <div class="donation-container">
        <!-- Bagian Teks -->
        <div class="donation-text">
            <div class="line"></div>
            <div class="text-content">
                <h2>Bantu Gajah dari Rumah</h2>
                <p>
                    Lakukan aksi nyata dalam upaya menjaga gajah untuk hidup lebih baik bersama 
                    Bank Sampah Sahabat Gajah
                </p>
                <button class="donation-button">Donasi Sekarang</button>
            </div>
        </div>
        <!-- Bagian Gambar -->
        <div class="donation-image">
            <img src={{ asset("asset/G6.png") }} alt="Bantu Gajah">
        </div>
    </div>
</section>

<!-- Reloop Market -->
<section class="reloop-section">
    <div class="reloop-container">
        <!-- Judul -->
        <h2 class="reloop-title">Reloop Market</h2>
        <!-- Gambar Poster -->
        <div class="reloop-image">
            <img src={{ asset("asset/G8.jpg") }} alt="Reloop Market">
        </div>
    </div>
    <!-- Segitiga Dekoratif -->
    <div class="triangle-left"></div>
    <div class="triangle-right"></div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="footer-container">
        <!-- Kolom Alamat -->
        <div class="footer-column">
            <img src={{ asset("asset/logo.png") }} alt="Logo Bank Sampah" class="footer-logo">
            <p class="footer-address">
                Jl. Airan Raya No.8, Way Huwi, lampung selatan, Kabupaten Lampung Selatan, Lampung 35141
            </p>
        </div>
        <!-- Kolom Link -->
        <div class="footer-column">
            <h3>BANK SAMPAH SAHABAT GAJAH</h3>
            <ul>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Reloop Market</a></li>
            </ul>
        </div>
        <!-- Kolom Kontak -->
        <div class="footer-column">
            <h3>IKUTI KAMI</h3>
            <ul>
                <li><a href="mailto:banksampahsahabatgajah@gmail.com">banksampahsahabatgajah@gmail.com</a></li>
                <li><a href="tel:+6281234567890">+62 812 3456 7890</a></li>
                <li>
                    <a href="#"><img src={{ asset("asset/instagram-icon.png") }} alt="Instagram"></a>
                    <a href="#"><img src={{ asset("asset/tiktok-icon.png") }} alt="TikTok"></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Copyright -->
    <div class="footer-bottom">
        <p>© 2025 Sahabat Gajah. All Rights Reserved</p>
    </div>
</footer>

</body>
</html>