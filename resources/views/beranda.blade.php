@extends('templates.layout')

@section('title')
    <title>Bank Sampah</title>
@endsection

@section('main')
    <main class="bg-primary-500 overflow-hidden">
        <!-- Hero Section -->
        <section
            class="relative h-full flex flex-col-reverse sm:flex-row items-center justify-center py-24 px-5 text-center clip-path-desktop bg-white border-none">
            <!-- Segitiga Kiri Bawah -->
            <div class="lg:max-w-[50%]">
                <div class="lg:w-500px hidden sm:block">
                    <img src={{ asset("asset/RE.png") }} alt="REUSE REDUCE RECYCLE Bank Sampah"

                        class="mx-auto d-block lg:w-300px md:w-200px mb-3" style="display: block; margin: 0 auto;">
                </div>
                <h3 class="m-3 text-lg font-bold text-primary-hover text-center ">
                    Selamat Datang di Bank Sampah Sahabat Gajah,<br>
                    Melindungi Gajah dan Melindungi Alam
                </h3>
                <button class="primary-btn"
                    onclick="document.querySelector('.join-section').scrollIntoView({ behavior: 'smooth' })">Selengkapnya</button>

            </div>
            <div class="w-64 sm:w-500px">
                <img src={{asset("asset/icon_1.png")}} alt="Bank Sampah Ilustrasi Recycle">
            </div>
        </section>

        <!-- Section Bergabung -->
        <section
            class="join-section sm:flex items-center justify-center lg:gap-8 gap-5 md:h-400px py-14 sm:py-0 lg:px-0 md:px-5 border-none">

            <!-- Kotak Langkah-Langkah -->
            <div class="flex items-center lg:gap-8 gap-5 justify-center">
                <div class="flex flex-col gap-3">
                    <div class="step-box  ">
                        <span class="mr-1 font-bold">Pilah</span> <span>Jenisnya</span>
                    </div>
                    <div class="step-box !bg-white !text-black">
                        <span class="mr-1 font-bold">Kemas</span> <span>Rapih</span>
                    </div>
                    <div class="step-box ">
                        <span class="mr-1 font-bold">Setor</span> <span>Sampahnya</span>
                    </div>
                </div>

                <!-- Gambar Tengah -->
                <div class="lg:w-64 md:w-48 w-36 bg-white sm:rounded-6xl rounded-5xl p-5">
                    <img src={{ asset("asset/gajah.png") }} alt="Bank Sampah Gajah Menggemaskan">
                </div>
            </div>

            <!-- Teks Ajak Bergabung -->
            <div
                class="sm:max-w-lg text-center items-center sm:items-start sm:text-left pt-10 px-5 sm:p-0 flex flex-col gap-5 sm:gap-7">
                <h2 class="sm:text-xl text-lg font-bold">Ayo Bergabung <br><span>untuk Pengelolaan Sampah yang Lebih
                        Baik!</span></h2>
                <p class=" sm:text-base text-sm">
                    Ambil bagian dalam upaya melestarikan lingkungan dengan bertanggung jawab atas sampah yang Anda hasilkan
                    melalui Bank Sampah Sahabat Gajah. Ikuti langkah mudah ini untuk mulai berkontribusi.
                </p>
                <a href="{{ route('login') }}" class="primary-btn">Bergabung Sekarang</a>
            </div>
        </section>

        <section class="clip-path-desktop bg-primary-bg -mb-[0.5px] border-none">
            <!-- Pencapaian Kami -->
            <div class="sm:py-14 py-10 px-5 border-none">
                <h2 class="text-2xl font-bold text-primary-hover mb-8 text-center">PENCAPAIAN KAMI</h2>
                <div class="grid sm:grid-flow-col justify-center gap-5">
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
            </div>
            <!-- Keuntungan -->
            <div class="sm:py-14 py-10 px-5 text-center border-none">
                <h2 class="text-2xl font-bold text-primary-hover mb-8">KEUNTUNGAN</h2>
                <div class="grid gap-5 sm:grid-cols-2 mx-auto sm:max-w-5xl">
                    <!-- Kotak 1 -->
                    <div class="benefit-box">
                        <div class="sm:text-right text-center lg:max-w-sm md:max-w-60">
                            <h3 class="font-bold">Sampah Terkelola</h3>
                            <p class="text-sm">Sampah akan dikelola secara bertanggung jawab dan mengurangi jumlah sampah
                                yang berakhir di TPA.
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-recycle fa-2xs text-white"></i>
                        </div>
                    </div>

                    <!-- Kotak 2 -->
                    <div class="benefit-box">
                        <div class="sm:text-right text-center lg:max-w-sm md:max-w-60">
                            <h3 class="font-bold">Pemberdayaan Masyarakat</h3>
                            <p class="text-sm">Masyarakat diajak terlibat langsung dan sambil menggali potensi yang
                                dimiliki.</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-people-group fa-2xs text-white"></i>
                        </div>
                    </div>

                    <!-- Kotak 3 -->
                    <div class="benefit-box">
                        <div class="sm:text-right text-center lg:max-w-sm md:max-w-60">
                            <h3 class="font-bold">Praktis dan Mudah</h3>
                            <p class="text-sm">Cukup pilah dan bersihkan sampah Anda di rumah dan setorkan kepada kami.</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-user-clock fa-2xs text-white"></i>
                        </div>
                    </div>

                    <!-- Kotak 4 -->
                    <div class="benefit-box">
                        <div class="sm:text-right text-center lg:max-w-sm md:max-w-60">
                            <h3 class="font-bold">Apresiasi Reward</h3>
                            <p class="text-sm">Masyarakat yang menyetorkan sampah akan mendapatkan reward dalam bentuk
                                tabungan.</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-gift fa-2xs text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="clip-path-desktop border-none bg-primary-bg">
            <!-- Cara Menyiapkan Sampah -->
            <div class="sm:py-14 py-10 px-5">
                <h2 class="text-2xl font-bold text-primary-hover mb-8 text-center">CARA MENYIAPKAN SAMPAH</h2>
                <div class="grid sm:grid-flow-col gap-5 lg:gap-14 md:gap-8 justify-center">
                    <!-- Kolom Kiri -->
                    <div class="flex flex-col sm:gap-10 gap-5">
                        <div class="lg:max-w-350px md:max-w-56">
                            <div class="prepare-box">
                                <h3 class="sm:p-4 p-2 text-center sm:text-left">1. Bersihkan Sampah</h3>
                            </div>

                            <div class="sm:mt-4 mt-2">
                                <p class="text-black sm:text-justify text-center">
                                    Pastikan sampah yang akan dikirim
                                    dalam keadaan bersih guna
                                    menghindari penyebaran kuman.
                                </p>
                            </div>
                        </div>

                        <div class="lg:max-w-350px md:max-w-56">
                            <div class="prepare-box">
                                <h3 class="sm:p-4 p-2 text-center sm:text-left">2. Pastikan Sampah Kering</h3>
                            </div>

                            <div class="sm:mt-4 mt-2">
                                <p class="text-black sm:text-justify text-center">
                                    Sampah yang akan dikirimkan harus dalam keadaan kering, tidak basah,
                                    atau pun lembab.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Gambar Tengah -->
                    <div class="max-w-350px mx-auto sm:block hidden md:my-auto">
                        <img src={{ asset("asset/G0.png") }} alt="Protecting the Environment Bank Sampah">
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="flex flex-col sm:gap-10 gap-5">
                        <div class=" lg:max-w-350px md:max-w-56">
                            <div class="prepare-box">
                                <h3 class="sm:p-4 p-2 text-center sm:text-left">3. Remas dan Lipat</h3>
                            </div>

                            <div class="sm:mt-4 mt-2">
                                <p class="text-black sm:text-justify text-center">
                                    Remas dan lipat sampah untuk
                                    memaksimalkan ruang dan volume
                                    pengiriman.
                                </p>
                            </div>
                        </div>

                        <div class=" lg:max-w-350px md:max-w-56">
                            <div class="prepare-box">
                                <h3 class="sm:p-4 p-2 text-center sm:text-left">4. Kemas Rapi</h3>
                            </div>

                            <div class="sm:mt-4 mt-2">
                                <p class="text-black sm:text-justify text-center">
                                    Kemas sampah menggunakan
                                    kardus atau kemasan lain.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Partner -->
            <div class="sm:py-14 py-1  text-center">
                <h2 class="text-2xl font-bold text-primary-hover mb-8">Partner</h2>
                <div class="grid grid-flow-col gap-5 justify-center">
                    <div class="partner-box">
                        <img src={{ asset("asset/G1.jpg") }} alt="Partner 1 Bank Sampah">
                    </div>
                    <div class="partner-box">
                        <img src={{ asset("asset/G4.jpg") }} alt="Partner 4 Bank Sampah Sahabat Gajah">
                    </div>
                </div>
            </div>
        </section>

        <!-- Donasi -->
        <section class="lg:h-400px max-w-6xl mx-auto lg:px-12 md:px-8 pt-10 sm:pt-0 border-none">
            <div class="flex sm:flex-row flex-col items-center justify-between w-full">
                <!-- Bagian Teks -->

                <div class="sm:border-l-4 max-w-sm flex flex-col gap-4 sm:pl-4 sm:pr-0 px-4 items-center sm:items-start">
                    <h2 class="text-xl font-bold">Bantu Gajah dari Rumah</h2>
                    <p class="sm:text-left text-center">
                        Lakukan aksi nyata dalam upaya menjaga gajah untuk hidup lebih baik bersama
                        Bank Sampah Sahabat Gajah
                    </p>
                    <a href="{{ route('login') }}"
                        class="primary-btn !bg-primary-hover w-fit hover:!bg-primary-hover-2">Donasi Sekarang</a>
                </div>

                <!-- Bagian Gambar -->
                <div class="lg:max-w-400px md:max-w-350px max-w-72">
                    <img src={{ asset("asset/G6.png") }} alt="Bantu Bank Sampah Sahabat Gajah">
                </div>
            </div>
        </section>

        <!-- Reloop Market -->
        <section class="bg-primary-bg sm:py-14 py-10 text-center clip-path-desktop border-none">
            <div class="sm:max-w-4xl max-w-80 mx-auto">
                <!-- Judul -->
                <h2 class="text-2xl font-bold text-primary-hover mb-8">Reloop Market</h2>
                <!-- Gambar Poster -->
                <div class="max-w-400px mx-auto">
                    <img src={{ asset("asset/G8.jpg") }} alt="Reloop Market Bank Sampah">
                </div>
            </div>
            <!-- Segitiga Dekoratif -->
        </section>
    </main>
@endsection