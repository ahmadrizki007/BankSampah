@extends('templates.layout')

@section('title')
    <title>Status Penarikan</title>
@endsection

@section('main')

    <div class="w-full sm:p-6 p-4 sm:flex items-start lg:gap-8 gap-4 bg-primary-bg shadow-md text-black">

        <!-- Side Bar -->
        <x-sidebar />

        <!-- Main Page -->
        <div class="w-full sm:flex mt-6 sm:mt-0 flex-col sm:p-6 p-3 bg-white rounded-xl shadow-md overflow-hidden">

            <!-- Title -->
            <div class="sm:mb-6 mb-3">
                <div class="sm:text-2xl text-lg font-bold text-primary-500">
                    Status Penarikan
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="table-auto w-full text-left border-collapse text-slate-500 sm:text-lg text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 sm:px-5 px-2 sm:font-medium">No</th>
                            <th class="py-3 sm:px-5 px-2 sm:font-medium">Tanggal Transaksi</th>
                            <th class="py-3 sm:px-5 px-2 sm:font-medium">Jumlah Saldo</th>
                            <th class="py-3 sm:px-5 px-2 sm:font-medium">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 sm:px-5 px-2">1</td>
                            <td class="py-3 sm:px-5 px-2">14-11-2023</td>
                            <td class="py-3 sm:px-5 px-2">Rp. 50.000</td>
                            <td class="py-3 sm:px-5 px-2">
                                <span class="bg-primary-500 text-white text-xs py-1 px-3 rounded-full">Berhasil</span>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 sm:px-5 px-2">2</td>
                            <td class="py-3 sm:px-5 px-2">14-10-2023</td>
                            <td class="py-3 sm:px-5 px-2">Rp. 25.000</td>
                            <td class="py-3 sm:px-5 px-2">
                                <span class="bg-gray-600 text-white text-xs py-1 px-3 rounded-full">Process</span>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 sm:px-5 px-2">3</td>
                            <td class="py-3 sm:px-5 px-2">12-10-2023</td>
                            <td class="py-3 sm:px-5 px-2">Rp. 15.000</td>
                            <td class="py-3 sm:px-5 px-2">
                                <span class="bg-red-500 text-white text-xs py-1 px-3 rounded-full">Ditolak</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection
