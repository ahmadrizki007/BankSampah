@extends('templates.layout')

@section('title')
    <title>Bank Sampah | Tentang Kami</title>
@endsection


@section('main')

    <div class="w-full  bg-primary-bg">
        <!-- Tentang Kami Section -->
        <section class="sm:py-14 py-10 px-5 text-center">
            <h2 class="text-2xl font-bold mb-8 text-primary-hover">PROFILE BANK SAMPAH <br> “SAHABAT GAJAH”</h2>
            <div class="max-w-xl mx-auto shadow-lg">
                <img src={{ asset('asset/G9.jpg') }} alt="Profile Bank Sampah Sahabat Gajah">
            </div>
        </section>

        <!-- Featured Video -->
        <section class="sm:py-14 py-10 px-5 text-center">
            <h2 class="text-2xl font-bold mb-8 text-primary-hover">FEATURED VIDEO</h2>
            <div class="flex justify-center gap-5 flex-wrap">
                <!-- Video 1 -->
                <div class="video-box">
                    <iframe class="w-full h-56 border-none" src="https://www.youtube.com/embed/BIVcaXwU51E"
                        title="Pengenalan: Bank Sampah Sahabat Gajah" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                    <div class="text-slate-700 text-lg p-4">
                        <h3 class="font-bold mb-3 text-left">Pengenalan: <br>Bank Sampah Sahabat Gajah</h3>
                        <p class="text-justify text-sm">Bank sampah yang berada di jalan airan raya, Way Huwi, Lampung
                            Selatan, memanfaatkan aplikasi
                            digital, sebagai salah satu layanan untuk mendapatkan sampah. Masyarakat yang ingin menjual
                            sampah bisa datang langsung, atau menjualnya melalui aplikasi.</p>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="video-box">
                    <iframe class="w-full h-56 border-none" src="https://www.youtube.com/embed/9GiB5G-vGQ0"
                        title="Dialog Spesial: Bank Sampah Sahabat Gajah" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                    <div class="text-slate-700 text-lg p-4">
                        <h3 class="font-bold mb-3 text-left">Dialog Spesial: <br>Bank Sampah Sahabat Gajah</h3>
                        <p class="text-justify text-sm">Ajak Masyarakat Peduli Dengan Lingkungan.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- History Section -->
        <section class="sm:py-14 py-10 px-5 text-center bg-primary-bg text-black">
            <h2 class="text-2xl font-bold mb-8 text-primary-hover">SEJARAH BANK SAMPAH <br> “SAHABAT GAJAH”</h2>
            <!-- Button Navigasi -->
            <div class="flex justify-center items-center mb-5 max-w-32 mx-auto">
                <button class="tab-button active " onclick="showTab(0)"></button>
                <hr class="border border-gray-300 w-full">
                <button class="tab-button " onclick="showTab(1)"></button>
            </div>
            <!-- Kontainer Tab -->
            <div class="relative">
                <!-- Tab 1 -->
                <div class="tab-content active">
                    <div class="relative sm:max-w-3xl mx-auto rounded-xl overflow-hidden">
                        <div class="text-overlay">
                            <h3 class="font-bold sm:text-lg mb-2 sm:mb-4">Kisah Berdirinya</h3>
                            <ul class="list-disc pl-2 sm:pl-5">
                                <li class="text-xs sm:text-sm mb-2">Terinspirasi dari pengalaman di Coca-Cola Forest Lampung
                                    yang kaya akan pembelajaran
                                    lingkungan, seperti penyelamatan Gajah Sumatera melalui program SAVE G.PROJECT dan
                                    pemanfaatan limbah teh, Tedy Purwoko mulai merintis inisiatif pengelolaan sampah dengan
                                    menata lahan kosong di Tanjung Bintang.</li>
                                <li class="text-xs sm:text-sm mb-2">Pendampingan dari CCEP Indonesia mendorong perubahan
                                    signifikan, membawa Bank Sampah
                                    Sahabat Gajah meraih prestasi gemilang dalam kontribusinya bagi pelestarian lingkungan
                                    dan kesejahteraan sosial, serta mewujudkan visi Tedy untuk manfaat lingkungan yang lebih
                                    luas.</li>
                            </ul>
                        </div>
                        <img src={{  asset('/asset/G10.jpg') }} alt="Kisah Berdirinya Bank Sampah"
                            class="rounded-xl sm:h-auto h-72 w-full">
                    </div>
                </div>
                <!-- Tab 2 -->
                <div class="tab-content">
                    <div class="relative sm:max-w-3xl mx-auto rounded-xl overflow-hidden">
                        <div class="text-overlay">
                            <h3 class="font-bold sm:text-lg mb-2 sm:mb-4">PENDIRIAN</h3>
                            <ul class="list-disc pl-2 sm:pl-5">
                                <li class="text-xs sm:text-sm mb-2">Bank Sampah ini diibaratkan seperti gajah yang selalu
                                    memberikan manfaat baik ke manusia
                                    ataupun lingkungannya.</li>
                                <li class="text-xs sm:text-sm mb-2">Bank sampah sahabat gajah sudah berjalan mulai dari
                                    tahun 2017 sebagai salah satu Bank
                                    Sampah yang berada di Kecamatan Tanjung Bintang, Kabupaten Lampung Selatan yang kini
                                    pindah operasi di Kecamatan Airan Raya Lampung Selatan agar mempermudah kegiatan operasi
                                    dan pengembangan Bank Sampah Unit (BSU) yang akan didirikan di 22 Kelurahan, Kota Metro.
                                </li>
                            </ul>
                        </div>
                        <img src={{  asset("/asset/G14.png") }} alt="Pendirian Bank Sampah Sahabat Gajah"
                            class="rounded-xl sm:h-auto h-72 w-full">
                    </div>
                </div>
            </div>
        </section>

        <!-- Visi Misi Section -->
        <section class="sm:py-14 py-10 px-5 text-center bg-primary-500">
            <h2 class="text-2xl font-bold mb-8 text-primary-hover">VISI dan MISI <br> BANK SAMPAH “SAHABAT GAJAH”</h2>
            <div class="flex flex-col sm:flex-row justify-center items-start lg:gap-12 gap-6">
                <!-- Visi -->
                <div class="flex-1 lg:max-w-500px text-left border-l-4 border-white lg:pl-8 pl-4">
                    <h3 class="sm:text-xl font-bold mb-4 ">Visi</h3>
                    <ul class="list-disc pl-2 sm:pl-5 text-sm text-justify space-y-2 lg:h-44 md:h-60">
                        <li>Memberikan manfaat dalam aksi bersama penyelamatan Gajah Sumatera</li>
                        <li>Menunjang pengolahan sampah sebagai wadah untuk mewujudkan masyarakat yang peduli akan
                            lingkungan</li>
                        <li>Terwujudnya Bank Sampah yang mandiri untuk membangun ekonomi masyarakat yang lebih baik serta
                            lingkungan yang bersih dan hijau sehingga terciptanya masyarakat yang sehat</li>
                    </ul>
                </div>
                <!-- Misi -->
                <div class="flex-1 lg:max-w-500px text-left border-l-4 border-white lg:pl-8 pl-4">
                    <h3 class="sm:text-xl font-bold mb-4 ">Misi</h3>
                    <ul class="list-disc pl-2 sm:pl-5 text-sm text-justify space-y-2 lg:h-44 md:h-60">
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
        <section class="sm:py-14 py-10 px-5 text-center">
            <h2 class="text-2xl font-bold mb-8 text-primary-hover">STRUKTUR KEPENGURUSAN BANK SAMPAH <br> “SAHABAT GAJAH”
            </h2>
            <div class="max-w-4xl mx-auto shadow-lg rounded-lg overflow-hidden">
                <img src={{  asset("/asset/G12.png") }} alt="Struktur Kepengurusan Bank Sampah Sahabat Gajah" class="w-full">
            </div>
        </section>

        {{-- Unit Usaha --}}
        <section class="sm:py-14 py-10 px-5 text-center">
            <h2 class="text-2xl font-bold mb-8 text-primary-hover">UNIT USAHA BANK SAMPAH <br> “SAHABAT GAJAH”</h2>
            <div class="flex gap-5 justify-center flex-wrap">
                <!-- Unit 1 -->
                <div class="unit-box">
                    <img src={{  asset("/asset/G13.jpg")}} alt="Bank Sampah Consult">
                    <div class="unit-text">Consult</div>
                </div>
                <!-- Unit 2 -->
                <div class="unit-box">
                    <img src={{  asset("/asset/G11.jpg")}} alt="Campaign Sahabat Gajah">
                    <div class="unit-text">Campaign</div>
                </div>
                <!-- Unit 3 -->
                <div class="unit-box">
                    <img src={{  asset("/asset/G15.png")}} alt="Collect Bank Sampah">
                    <div class="unit-text">Collect</div>
                </div>
                <!-- Unit 4 -->
                <div class="unit-box">
                    <img src={{  asset("asset/G16.jpg") }} alt="Class Sahabat Gajah">
                    <div class="unit-text">Class</div>
                </div>
            </div>
        </section>

        {{-- Highlight Section --}}
        <section class="relative w-full h-300px overflow-hidden text-center">
            <img src={{  asset("asset/G17.jpeg") }} alt="Bank Sampah Sahabat Gajah"
                class="absolute top-0 left-0 w-full h-full object-cover opacity-50">
            <div class="z-10 text-black text-xl flex justify-center items-center relative h-full">
                <p>
                    Mulai Langkah Nyata, Bersama <strong>Bank Sampah Sahabat Gajah</strong> <br>
                    Kelola Sampah untuk Masa Depan Berkelanjutan
                </p>
            </div>
        </section>

    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection