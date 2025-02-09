@extends('templates.layout')

@section('title')

<title> Produk </title>

@endsection


@section('main')

<main class="bg-[#FBFBFB] py-8 px-6">

    <!-- Judul Produk Rumah inspirasi Sahabat Gajah -->
    <div class="flex items-center gap-4">
        <h1 class="text-xl font-poppins font-bold text-[#92A48B]">RUMAH INSPIRASI
            <span class="font-caveat font-normal text-[#92A48B]">SAHABAT GAJAH</span>
        </h1>
    </div>

    <!-- Produk Box -->
    <div class="mt-8 max-w-xs rounded-2xl border border-[#9D9D9D] overflow-hidden">
        <!-- Gambar Produk -->
        <div class="w-full h-72 bg-cover bg-center" style="background-image: url('{{ asset('asset/G18.png') }}');">
        </div>

        <!-- Info Produk -->
        <div class="p-4">
            <!-- Nama Produk -->
            <h2 class="text-xl font-poppins font-bold text-[#9D9D9D] text-center mb-3.5">Tas Jinjing</h2>

            <!-- Harga Produk -->
            <p class="text-lg font-poppins font-bold text-[#92A48B] text-center mt-3.5">Rp 50.000</p>
        </div>
    </div>

    <!-- Box Lihat Produk Kami (Di bawah Produk) -->
    <div class="bg-[#F2F2F2] p-4 mt-6">
        <div class="flex items-center justify-between">
            <p class="px-6 py-2 text-sm font-poppins font-bold text-[#9D9D9D]">Lihat Produk Kami</p>
            <button class="px-6 py-2 text-sm text-[#92A48B] rounded-2xl border border-[#92A48B]">
            Selengkapnya
            </button>
        </div>
    </div>


    <!-- Judul Produk Rumah inspirasi Sahabat Gajah -->
    <div class="flex items-center gap-4 mt-8">
       <h1 class="text-xl font-poppins font-bold text-[#92A48B]">RELOOP MARKET </h1>
    </div>

    <!-- Produk Box -->
    <div class="mt-8 max-w-xs rounded-2xl border border-[#9D9D9D] overflow-hidden">
        <!-- Gambar Produk -->
        <div class="w-full h-64 bg-cover bg-center" 
             style="background-image: url('{{ asset('asset/G19.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: center;">
        </div>

        <!-- Info Produk -->
        <div class="p-4">
            <!-- Nama Produk -->
            <h2 class="text-xl font-poppins font-bold text-[#9D9D9D] text-center mb-3.5">Kipas Angin</h2>

            <!-- Harga Produk -->
            <p class="text-lg font-poppins font-bold text-[#92A48B] text-center mt-3.5">Rp 50.000</p>
        </div>
    </div>

    <!-- Box Lihat Produk Kami (Di bawah Produk) -->
    <div class="bg-[#F2F2F2] p-4 mt-6">
        <div class="flex items-center justify-between">
            <p class="px-6 py-2 text-sm font-poppins font-bold text-[#9D9D9D]">Lihat Produk Kami untuk Reloop Market</p>
            <button class="px-6 py-2 text-sm text-[#92A48B] rounded-2xl border border-[#92A48B]">
            Selengkapnya
            </button>
        </div>
    </div>

    <!-- Header Section dengan Gambar Latar Belakang -->
    <div class="bg-[#FBFBFB] py-8 px-6"> 
        
        <!-- Header Section dengan Gambar Latar Belakang -->
        <div class="w-full h-96 bg-cover bg-center" style="background-image: url('{{ asset('asset/G20.jpg') }}');">
            <div class="flex items-center justify-center h-full bg-white bg-opacity-50">
                <div class="text-center text-black px-4 my-8">
                    <h2 class="text-3xl font-poppins mb-6">
                        Ingin Mendapatkan Informasi <span class="text-[#000000] font-bold">Produk</span> yang Lebih Lengkap?
                    </h2>
                    <!-- Tombol dengan Background Hijau -->
                    <a href="#" class="bg-[#276561] text-white py-3 px-10 rounded-lg text-xl font-poppins hover:bg-opacity-90">
                        Hubungi CS
                    </a>
                </div>
            </div>
    </div>

    <!-- Box Dukung Keberlanjutan -->
    <div class="flex items-center gap-6 mt-8">
                <i class="fa-solid fa-hand-holding-heart text-3xl text-[#000000] opacity-75"></i>
                <p class="text-xl font-poppins font-medium text-[#000000]">
                Dukung Keberlanjutan Lewat Reloop Market
                </p>
        
    <!-- Tombol Selengkapnya -->
        <button class="ml-auto px-6 py-2 text-sm text-[#92A48B] rounded-2xl border border-[#92A48B]">
            Selengkapnya
        </button>

    </div>

</main>


@endsection


@section('scripts')

<script></script>

@endsection