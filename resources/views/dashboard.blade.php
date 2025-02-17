{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('templates.layout')

@section('title')
    <title>Profile</title>
@endsection

@section('main')

    <div class="w-full p-6 flex items-start gap-x-8 bg-[#ececec] shadow-md">

        <!-- Side Bar -->
        <x-sidebar />

        <div class="w-full">

            <!-- "Selamat Datang" Outside the Card -->
            <div class="text-3xl font-bold text-[#276561] mb-6">
                Selamat Datang, USER 1
            </div>

            <!-- Cards Container: Two cards side by side -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Card: Dompet Kamu (Balance) -->
                <div class="p-6 bg-white  rounded-lg shadow-lg flex flex-col">
                    <div class="text-2xl text-gray-600 mb-4 font-poppins font-regular">Dompet Kamu</div>
                    <div class="text-lg font-inter text-[#9D9D9D]">Saldo Tersedia</div>
                    <div class="text-4xl font-semibold mt-4 mb-4">Rp 50.000</div>

                    <!-- Button Container -->
                    <div class="flex gap-4 mt-6">
                        <button class="py-2 px-6 bg-[#3182CE] text-white rounded-md text-sm w-full md:w-auto">Tarik
                            Saldo</button>
                        <button class="py-2 px-6 bg-[#276561] text-white rounded-md text-sm w-full md:w-auto">Donasi
                            Gajah</button>
                    </div>
                </div>

                <!-- Card: Riwayat Transaksi (Transaction History) -->
                <div class="p-6 bg-white  rounded-lg shadow-lg">
                    <div class="text-2xl font-poppins font-regular text-gray-800 mb-4">
                        Riwayat Transaksi
                    </div>
                    <div class="text-lg text-gray-500 mb-4">
                        Transaksi terakhir
                    </div>

                    <!-- Transaction History Table -->
                    <table class="w-full table-auto text-left">
                        <thead>
                            <tr class="border-b border-[#D5D5D5]">
                                <th class="py-2 px-4 text-[#7F8694] text-lg font-medium font-poppins">No</th>
                                <th class="py-2 px-4 text-[#7F8694] text-lg font-medium font-poppins">Tanggal</th>
                                <th class="py-2 px-4 text-[#7F8694] text-lg font-medium font-poppins">Transaksi</th>
                                <th class="py-2 px-4 text-[#7F8694] text-lg font-medium font-poppins">Nominal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-[#D5D5D5]">
                                <td class="py-2 px-4 text-[#7F8694] text-lg font-medium font-poppins">1</td>
                                <td class="py-2 px-4 text-[#7F8694] text-lg font-medium font-poppins">14-11-2023</td>
                                <td class="py-2 px-4 text-[#7F8694] text-lg font-medium font-poppins">Donasi Gajah</td>
                                <td class="py-2 px-4 text-[#7F8694] text-lg font-medium font-poppins">Rp. 5.000</td>
                            </tr>
                            <tr class="border-b border-[#D5D5D5]">
                                <td class="py-2 px-4 text-[#7F8694] text-lg font-medium font-poppins">2</td>
                                <td class="py-2 px-4 text-[#7F8694] text-lg font-medium font-poppins">11-11-2023</td>
                                <td class="py-2 px-4 text-[#7F8694] text-lg font-medium font-poppins">Tabungan Gajah</td>
                                <td class="py-2 px-4 text-[#7F8694] text-lg font-medium font-poppins">Rp. 5.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection