<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About</title>
        <link rel="stylesheet" href={{ asset("css/style.css")}}>

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
        <header class="header">
            <div class="logo">
                <img src="asset/logo.png" alt="Logo Bank Sampah">
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="beranda.html">Beranda</a></li>
                    <li><a href="about.html" class="active">Tentang Kami</a></li>
                    <li><a href="#">Produk</a></li>
                    <li><a href="#">Kunjungan</a></li>
                </ul>
            </nav>
            <button class="login-btn">Login</button>
        </header>
    
        <!-- Tentang Kami Section -->
        <section class="about-section">
            <h2 class="about-title">PROFILE BANK SAMPAH <br> “SAHABAT GAJAH”</h2>
            <div class="about-image">
                <img src="asset/G9.jpg" alt="Profile Bank Sampah Sahabat Gajah">
            </div>
        </section>
    
        <!-- Featured Video -->
        <section class="featured-video-section">
            <h2 class="featured-title">FEATURED VIDEO</h2>
            <div class="video-container">
                <!-- Video 1 -->
                <div class="video-box">
                    <iframe 
                        class="video-frame" 
                        src="https://www.youtube.com/embed/BIVcaXwU51E" 
                        title="Pengenalan: Bank Sampah Sahabat Gajah" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <div class="video-description">
                        <h3>Pengenalan: <br>Bank Sampah Sahabat Gajah</h3>
                        <p>Bank sampah yang berada di jalan airan raya, Way Huwi, Lampung Selatan, memanfaatkan aplikasi digital, sebagai salah satu layanan untuk mendapatkan sampah. Masyarakat yang ingin menjual sampah bisa datang langsung, atau menjualnya melalui aplikasi.</p>
                    </div>
                </div>
        
                <!-- Video 2 -->
                <div class="video-box">
                    <iframe 
                        class="video-frame" 
                        src="https://www.youtube.com/embed/9GiB5G-vGQ0" 
                        title="Dialog Spesial: Bank Sampah Sahabat Gajah" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <div class="video-description">
                        <h3>Dialog Spesial: <br>Bank Sampah Sahabat Gajah</h3>
                        <p>Ajak Masyarakat Peduli Dengan Lingkungan</p>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- History Section -->
        <section class="history-section">
            <h2 class="history-title">SEJARAH BANK SAMPAH <br> “SAHABAT GAJAH”</h2>
            <!-- Button Navigasi -->
            <div class="tabs">
                <button class="tab-button active" onclick="showTab(0)">Kisah Berdirinya</button>
                <button class="tab-button" onclick="showTab(1)">Pendirian</button>
            </div>
            <!-- Kontainer Tab -->
            <div class="history-container">
                <!-- Tab 1 -->
                <div class="tab-content active">
                    <div class="history-content">
                        <div class="text-overlay">
                            <h3>Kisah Berdirinya</h3>
                            <ul>
                                <li>Terinspirasi dari pengalaman di Coca-Cola Forest Lampung yang kaya akan pembelajaran lingkungan, seperti penyelamatan Gajah Sumatera melalui program SAVE G.PROJECT dan pemanfaatan limbah teh, Tedy Purwoko mulai merintis inisiatif pengelolaan sampah dengan menata lahan kosong di Tanjung Bintang.</li>
                                <li>Pendampingan dari CCEP Indonesia mendorong perubahan signifikan, membawa Bank Sampah Sahabat Gajah meraih prestasi gemilang dalam kontribusinya bagi pelestarian lingkungan dan kesejahteraan sosial, serta mewujudkan visi Tedy untuk manfaat lingkungan yang lebih luas.</li>
                            </ul>
                        </div>
                        <img src="asset/G10.jpg" alt="Kisah Berdirinya" class="history-image">
                    </div>
                </div>
                <!-- Tab 2 -->
                <div class="tab-content">
                    <div class="history-content">
                        <div class="text-overlay">
                            <h3>PENDIRIAN</h3>
                            <ul>
                                <li>Bank Sampah ini diibaratkan seperti gajah yang selalu memberikan manfaat baik ke manusia ataupun lingkungannya.</li>
                                <li>Bank sampah sahabat gajah sudah berjalan mulai dari tahun 2017 sebagai salah satu Bank Sampah yang berada di Kecamatan Tanjung Bintang, Kabupaten Lampung Selatan yang kini pindah operasi di Kecamatan Airan Raya Lampung Selatan agar mempermudah kegiatan operasi dan pengembangan Bank Sampah Unit (BSU) yang akan didirikan di 22 Kelurahan, Kota Metro.</li>
                            </ul>
                        </div>
                        <img src="asset/G11.jpg" alt="Pendirian" class="history-image">
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Visi Misi Section -->
        <section class="vision-mission-section">
            <h2 class="section-title">VISI dan MISI <br> BANK SAMPAH “SAHABAT GAJAH”</h2>
            <div class="vision-mission-container">
                <!-- Visi -->
                <div class="vision">
                    <h3>Visi</h3>
                    <ul>
                        <li>Memberikan manfaat dalam aksi bersama penyelamatan Gajah Sumatera</li>
                        <li>Menunjang pengolahan sampah sebagai wadah untuk mewujudkan masyarakat yang peduli akan lingkungan</li>
                        <li>Terwujudnya Bank Sampah yang mandiri untuk membangun ekonomi masyarakat yang lebih baik serta lingkungan yang bersih dan hijau sehingga terciptanya masyarakat yang sehat</li>
                    </ul>
                </div>
                <!-- Misi -->
                <div class="mission">
                    <h3>Misi</h3>
                    <ul>
                        <li>Mengurangi jumlah timbulan sampah di tempat pembuangan akhir</li>
                        <li>Memberdayakan masyarakat untuk dapat melakukan pilah sampah dari rumah sebagai bentuk peduli lingkungan dari sumbernya</li>
                        <li>Mendayagunakan sampah menjadi barang bermanfaat sehingga mempunyai nilai ekonomi</li>
                        <li>Menciptakan lingkungan yang bersih dan sehat</li>
                        <li>Menciptakan lapangan pekerjaan</li>
                    </ul>
                </div>
            </div>
        </section>
    
        
        <!-- Footer -->
        <footer class="footer">
            <div class="footer-container">
                <div class="footer-column">
                    <img src="asset/logo.png" alt="Logo Bank Sampah" class="footer-logo">
                    <p class="footer-address">
                        Jl. Airan Raya No.8, Way Huwi, Lampung Selatan, Kabupaten Lampung Selatan, Lampung 35141
                    </p>
                </div>
                <div class="footer-column">
                    <h3>BANK SAMPAH SAHABAT GAJAH</h3>
                    <ul>
                        <li><a href="about.html">Tentang Kami</a></li>
                        <li><a href="#">Produk</a></li>
                        <li><a href="#">Reloop Market</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>IKUTI KAMI</h3>
                    <ul>
                        <li><a href="mailto:banksampahsahabatgajah@gmail.com">banksampahsahabatgajah@gmail.com</a></li>
                        <li><a href="tel:+6281234567890">+62 812 3456 7890</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 Sahabat Gajah. All Rights Reserved</p>
            </div>
        </footer>
    
         <!-- JavaScript -->
         <script src="script.js"></script>
    
    </body>
</html>