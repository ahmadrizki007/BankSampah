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
    <div class="w-full sm:p-6 p-4 sm:flex items-start gap-x-8 bg-primary-bg shadow-md text-black">

        <!-- Side Bar -->
        <x-sidebar />

        <div class="w-full overflow-hidden mt-6 sm:mt-0">
            <!-- "Selamat Datang" Outside the Card -->
            <div class="sm:text-3xl text-xl font-bold text-primary-500 mb-6">
                Selamat Datang, USER 1
            </div>

            <!-- Cards Container: Two cards side by side -->
            <div class="flex gap-6 sm:flex-row flex-col">
                <!-- Card: Dompet Kamu (Balance) -->
                <div class="sm:p-6 p-3 bg-white rounded-lg shadow-lg flex flex-col">
                    <div class="sm:text-2xl text-lg text-gray-600 mb-4">Dompet Kamu</div>
                    <div class="sm:text-lg font-inter text-primary-gray">Saldo Tersedia</div>
                    <div class="sm:text-4xl text-3xl font-semibold mt-4 mb-4">Rp 50.000</div>

                    <!-- Button Container -->
                    <div class="flex gap-4 sm:mt-6 mt-2">
                        <button class="py-2 px-6 bg-blue-500 text-white rounded-md text-sm w-full md:w-auto">Tarik
                            Saldo</button>
                        <button class="py-2 px-6 bg-primary-500 text-white rounded-md text-sm w-full md:w-auto">Donasi
                            Gajah</button>
                    </div>
                </div>

                <!-- Card: Riwayat Transaksi (Transaction History) -->
                <div class="sm:p-6 p-3 bg-white rounded-lg shadow-lg flex-1">
                    <div class="sm:text-2xl text-lg text-gray-800 mb-4">
                        Riwayat Transaksi
                    </div>
                    <div class="sm:text-lg text-gray-500 mb-4">
                        Transaksi terakhir
                    </div>

                    <!-- Transaction History Table -->
                    <table class="w-full table-auto text-left text-slate-500 sm:text-lg text-sm">
                        <thead>
                            <tr class="border-b border-gray-200">
                                <th class="py-2 sm:px-4 px-2 sm:font-medium">No</th>
                                <th class="py-2 sm:px-4 px-2 sm:font-medium">Tanggal</th>
                                <th class="py-2 sm:px-4 px-2 sm:font-medium">Transaksi</th>
                                <th class="py-2 sm:px-4 px-2 sm:font-medium">Nominal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200">
                                <td class="py-2 sm:px-4 px-2 text-center">1</td>
                                <td class="py-2 sm:px-4 px-2">14-11-2023</td>
                                <td class="py-2 sm:px-4 px-2">Donasi Gajah</td>
                                <td class="py-2 sm:px-4 px-2">Rp. 5.000</td>
                            </tr>
                            <tr class="border-b border-gray-200">
                                <td class="py-2 sm:px-4 px-2 text-center">2</td>
                                <td class="py-2 sm:px-4 px-2">11-11-2023</td>
                                <td class="py-2 sm:px-4 px-2">Tabungan Gajah</td>
                                <td class="py-2 sm:px-4 px-2">Rp. 5.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
