@extends('templates.layout')

@section('title')
<title>Tentang Kami</title>
@endsection


@section('main')
<!-- Tentang Kami Section -->
<section class="about-section">
    <h2 class="about-title">PROFILE BANK SAMPAH <br> “SAHABAT GAJAH”</h2>
    <div class="about-image">
        <img src={{ asset('asset/G9.jpg') }} alt="Profile Bank Sampah Sahabat Gajah">
    </div>
</section>

<!-- Featured Video -->
<section class="featured-video-section">
    <h2 class="featured-title">FEATURED VIDEO</h2>
    <div class="video-container">
        <!-- Video 1 -->
        <div class="video-box">
            <iframe class="video-frame" src="https://www.youtube.com/embed/BIVcaXwU51E"
                title="Pengenalan: Bank Sampah Sahabat Gajah" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
            <div class="video-description">
                <h3>Pengenalan: <br>Bank Sampah Sahabat Gajah</h3>
                <p>Bank sampah yang berada di jalan airan raya, Way Huwi, Lampung Selatan, memanfaatkan aplikasi
                    digital, sebagai salah satu layanan untuk mendapatkan sampah. Masyarakat yang ingin menjual
                    sampah bisa datang langsung, atau menjualnya melalui aplikasi.</p>
            </div>
        </div>

        <!-- Video 2 -->
        <div class="video-box">
            <iframe class="video-frame" src="https://www.youtube.com/embed/9GiB5G-vGQ0"
                title="Dialog Spesial: Bank Sampah Sahabat Gajah" frameborder="0"
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
                        <li>Terinspirasi dari pengalaman di Coca-Cola Forest Lampung yang kaya akan pembelajaran
                            lingkungan, seperti penyelamatan Gajah Sumatera melalui program SAVE G.PROJECT dan
                            pemanfaatan limbah teh, Tedy Purwoko mulai merintis inisiatif pengelolaan sampah dengan
                            menata lahan kosong di Tanjung Bintang.</li>
                        <li>Pendampingan dari CCEP Indonesia mendorong perubahan signifikan, membawa Bank Sampah
                            Sahabat Gajah meraih prestasi gemilang dalam kontribusinya bagi pelestarian lingkungan
                            dan kesejahteraan sosial, serta mewujudkan visi Tedy untuk manfaat lingkungan yang lebih
                            luas.</li>
                    </ul>
                </div>
                <img src={{  asset('/asset/G10.jpg') }} alt="Kisah Berdirinya" class="history-image">
            </div>
        </div>
        <!-- Tab 2 -->
        <div class="tab-content">
            <div class="history-content">
                <div class="text-overlay">
                    <h3>PENDIRIAN</h3>
                    <ul>
                        <li>Bank Sampah ini diibaratkan seperti gajah yang selalu memberikan manfaat baik ke manusia
                            ataupun lingkungannya.</li>
                        <li>Bank sampah sahabat gajah sudah berjalan mulai dari tahun 2017 sebagai salah satu Bank
                            Sampah yang berada di Kecamatan Tanjung Bintang, Kabupaten Lampung Selatan yang kini
                            pindah operasi di Kecamatan Airan Raya Lampung Selatan agar mempermudah kegiatan operasi
                            dan pengembangan Bank Sampah Unit (BSU) yang akan didirikan di 22 Kelurahan, Kota Metro.
                        </li>
                    </ul>
                </div>
                <img src={{  asset("/asset/G14.png") }} alt="Pendirian" class="history-image">
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
                <li>Menunjang pengolahan sampah sebagai wadah untuk mewujudkan masyarakat yang peduli akan
                    lingkungan</li>
                <li>Terwujudnya Bank Sampah yang mandiri untuk membangun ekonomi masyarakat yang lebih baik serta
                    lingkungan yang bersih dan hijau sehingga terciptanya masyarakat yang sehat</li>
            </ul>
        </div>
        <!-- Misi -->
        <div class="mission">
            <h3>Misi</h3>
            <ul>
                <li>Mengurangi jumlah timbulan sampah di tempat pembuangan akhir</li>
                <li>Memberdayakan masyarakat untuk dapat melakukan pilah sampah dari rumah sebagai bentuk peduli
                    lingkungan dari sumbernya</li>
                <li>Mendayagunakan sampah menjadi barang bermanfaat sehingga mempunyai nilai ekonomi</li>
                <li>Menciptakan lingkungan yang bersih dan sehat</li>
                <li>Menciptakan lapangan pekerjaan</li>
            </ul>
        </div>
    </div>
</section>

{{-- Struktur Bank Sampah --}}
<section class="struktur-section">
    <h2 class="struktur-title">STRUKTUR KEPENGURUSAN BANK SAMPAH <br> “SAHABAT GAJAH”</h2>
    <div class="struktur-image">
        <img src={{  asset("/asset/G12.png") }} alt="Struktur Kepengurusan Bank Sampah Sahabat Gajah">
    </div>
</section>

{{-- Unit Usaha --}}
<section class="unit-section">
    <h2 class="unit-title">UNIT USAHA BANK SAMPAH <br> “SAHABAT GAJAH”</h2>
    <div class="unit-container">
        <!-- Unit 1 -->
        <div class="unit-box">
            <img src={{  asset("/asset/G13.jpg")}} alt=" Consult">
            <div class="unit-text">Consult</div>
        </div>
        <!-- Unit 2 -->
        <div class="unit-box">
            <img src={{  asset("/asset/G11.jpg")}} alt=" Campaign">
            <div class="unit-text">Campaign</div>
        </div>
        <!-- Unit 3 -->
        <div class="unit-box">
            <img src={{  asset("/asset/G15.png")}} alt=" Collect">
            <div class="unit-text">Collect</div>
        </div>
        <!-- Unit 4 -->
        <div class="unit-box">
            <img src={{  asset("asset/G16.jpg") }} alt=" Class">
            <div class="unit-text">Class</div>
        </div>
    </div>
</section>

{{-- Highlight Section --}}
<section class="highlight-section">
    <div class="highlight-container">
        <img src={{  asset("asset/G17.jpeg") }} alt=" Bank Sampah Sahabat Gajah" class="highlight-background">
        <div class="highlight-text">
            <p>
                Mulai Langkah Nyata, Bersama <strong>Bank Sampah Sahabat Gajah</strong> <br>
                Kelola Sampah untuk Masa Depan Berkelanjutan
            </p>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="{{ asset('js/script.js') }}"></script>
@endsection