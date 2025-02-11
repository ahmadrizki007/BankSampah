@extends('templates.layout')

@section('title')
<title> Kunjungan </title>
@endsection

@section('main')

<main class="w-full bg-[#FBFBFB] py-8 px-6">

    <!-- Judul Kunjungan Bank Sampah -->
    <div class="flex items-center justify-center gap-4">
        <h2 class="text-2xl font-poppins font-semibold text-[#000000] mb-4 text-center">
            KUNJUNGAN BANK SAMPAH <br />
            <span class="font-poppins text-lg">"SAHABAT GAJAH"</span>
        </h2>
    </div>

    <!-- Deskripsi Kunjungan -->
    <div class="mt-8 max-w-4xl mx-auto text-center">
        <p class="text-lg font-poppins text-[#000000] mb-6">
            Bank Sampah Sahabat Gajah telah menerima kunjungan dari berbagai lapisan masyarakat mulai dari anak
            sekolah, komunitas, instansi, dan pemerintahan. Jika anda ingin melakukan kunjungan ke Bank Sampah
            Sahabat Gajah, silahkan isi formulir secara lengkap di bawah ini.
        </p>

        <!-- Tombol Kunjungi Sekarang -->
        <a href="{{ url('/formulir') }}"
            class="inline-block px-6 py-2 text-sm text-white bg-[#276561] rounded-2xl hover:bg-[#1a4642] transition-colors duration-300">
            KUNJUNGI SEKARANG
        </a>

        <!-- Pesan di bawah -->
        <div class="text-center mt-6">
            <p class="text-lg font-poppins text-[#000000]">
                Kami tunggu kunjungan anda di Bank Sampah Sahabat Gajah
            </p>
        </div>

        <!-- Gambar Bank Sampah Kunjungan -->
        <div class="mt-8 max-w-4xl mx-auto">
            <img src="{{ asset('asset/G21.jpg') }}" alt="Kunjungan Bank Sampah Sahabat Gajah"
                class="w-full h-auto shadow-lg">
        </div>
</main>

@endsection


@section('scripts')

<script></script>

@endsection