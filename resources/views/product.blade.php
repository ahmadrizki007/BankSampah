@extends('templates.layout')

@section('title')

<title> Produk </title>

@endsection


@section('main')

    <main class="w-full pt-14 sm:pt-10 sm:px-14 px-5">

        <!-- Judul Produk Rumah inspirasi Sahabat Gajah -->
        <div class="flex items-center gap-4">
            <h1 class="text-xl font-bold text-primary-hover-2">RUMAH INSPIRASI
                <span class="font-caveat font-normal text-primary-hover-2">SAHABAT GAJAH</span>
            </h1>
        </div>

        <!-- Produk Box -->
        <div class="mt-8 mx-auto sm:mx-0 max-w-xs rounded-2xl border border-primary-gray overflow-hidden">
            <!-- Gambar Produk -->
            <div class="w-full h-72 bg-cover bg-center" style="background-image: url('{{ asset('asset/G18.png') }}')">
            </div>

            <!-- Info Produk -->
            <div class="p-4">
                <!-- Nama Produk -->
                <h2 class="text-xl font-bold text-primary-gray text-center mb-3.5">Tas Jinjing</h2>

                <!-- Harga Produk -->
                <p class="text-lg font-bold text-primary-hover-2 text-center mt-3.5">Rp 50.000</p>
            </div>
        </div>

        <!-- Box Lihat Produk Kami (Di bawah Produk) -->
        <div class="bg-primary-bg p-4 mt-6">
            <div class="flex items-center justify-between">
                <p class="px-6 py-2 text-sm font-bold text-primary-gray">Lihat Produk Kami untuk Reloop Market</p>
                <button class="px-6 py-2 text-sm text-primary-hover-2 rounded-2xl border border-primary-hover">
                    Selengkapnya
                </button>
            </div>
        </div>

        <!-- Judul Produk Rumah inspirasi Sahabat Gajah -->
        <div class="flex items-center gap-4 mt-8">
            <h1 class="text-xl font-bold text-primary-hover-2">RELOOP MARKET </h1>
        </div>

        <!-- Produk Box -->
        <div class="mt-8  mx-auto sm:mx-0 max-w-xs rounded-2xl border border-primary-gray overflow-hidden">
            <!-- Gambar Produk -->
            <div class="w-full h-64 bg-cover bg-center"
                style="background-image: url('{{ asset('asset/G19.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: center;">
            </div>

            <!-- Info Produk -->
            <div class="p-4">
                <!-- Nama Produk -->
                <h2 class="text-xl font-bold text-primary-gray text-center mb-3.5">Kipas Angin</h2>

                <!-- Harga Produk -->
                <p class="text-lg font-bold text-primary-hover-2 text-center mt-3.5">Rp 50.000</p>
            </div>
        </div>

        <!-- Box Lihat Produk Kami (Di bawah Produk) -->
        <div class="bg-primary-bg p-4 mt-6">
            <div class="flex items-center justify-between">
                <p class="px-6 py-2 text-sm font-bold text-primary-gray">Lihat Produk Kami untuk Reloop Market</p>
                <button class="px-6 py-2 text-sm text-primary-hover-2 rounded-2xl border border-primary-hover">
                    Selengkapnya
                </button>
            </div>
        </div>

        <!-- Header Section dengan Gambar Latar Belakang -->
        <div class="mt-8 bg-primary-bg sm:-mx-14 -mx-5">
            <!-- Header Section dengan Gambar Latar Belakang -->
            <div class="w-full h-96 bg-cover bg-center" style="background-image: url('{{ asset('asset/G20.jpg') }}');">
                <div class="flex items-center justify-center h-full bg-white bg-opacity-50">
                    <div class="text-center text-black px-4 my-8">
                        <h2 class="sm:text-3xl text-2xl mb-6">
                            Ingin Mendapatkan Informasi <span class="text-black font-bold">Produk</span> yang Lebih
                            Lengkap?
                        </h2>
                        <!-- Tombol dengan Background Hijau -->
                        <a href="#"
                            class="bg-primary-500 text-white py-3 px-10 rounded-lg text-xl hover:bg-opacity-90">
                            Hubungi CS
                        </a>
                    </div>
                </div>
            </div>

            <!-- Box Dukung Keberlanjutan -->
            <div class="flex flex-col sm:flex-row items-center justify-between p-8 gap-4 sm:gap-0 text-center sm:text-left">
                    <i class="fa-solid fa-hand-holding-heart text-3xl text-black opacity-75"></i>
                    <p class="sm:text-xl text-lg font-medium text-black">
                        Dukung Keberlanjutan Lewat Reloop Market
                    </p>

                <!-- Tombol Selengkapnya -->
                <button class="px-6 py-2 text-sm text-primary-hover-2 rounded-2xl border border-primary-hover">
                    Selengkapnya
                </button>
            </div>
        </div>


    </main>


@endsection


@section('scripts')

<script></script>

@endsection
