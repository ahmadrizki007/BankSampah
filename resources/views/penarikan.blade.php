@extends('templates.layout')

@section('title')
    <title>Status Penarikan</title>
@endsection

@section('main')

    <div class="w-full p-8 flex items-start gap-x-8 bg-[#ececec]">

        <!-- Side Bar -->
        <x-sidebar />

        <!-- Main Page -->
        <div class="w-full flex flex-col py-6 px-8 bg-white rounded-xl shadow-md">

            <!-- Title -->
            <div class="flex justify-between items-center mb-6">
                <div class="text-2xl font-semibold text-[#276561]">
                    Status Penarikan
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="table-auto w-full text-left border-collapse">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 px-6 text-[#7F8694] text-sm font-medium">No</th>
                            <th class="py-3 px-6 text-[#7F8694] text-sm font-medium">Tanggal Transaksi</th>
                            <th class="py-3 px-6 text-[#7F8694] text-sm font-medium">Jumlah Saldo</th>
                            <th class="py-3 px-6 text-[#7F8694] text-sm font-medium">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-[#D5D5D5]">
                            <td class="py-3 px-6 text-sm">1</td>
                            <td class="py-3 px-6 text-sm">14-11-2023</td>
                            <td class="py-3 px-6 text-sm">Rp. 50.000</td>
                            <td class="py-3 px-6 text-sm">
                                <span class="bg-[#276561] text-white text-xs py-1 px-3 rounded-full">Berhasil</span>
                            </td>
                        </tr>
                        <tr class="border-b border-[#D5D5D5]">
                            <td class="py-3 px-6 text-sm">2</td>
                            <td class="py-3 px-6 text-sm">14-10-2023</td>
                            <td class="py-3 px-6 text-sm">Rp. 25.000</td>
                            <td class="py-3 px-6 text-sm">
                                <span class="bg-[#7F8694] text-white text-xs py-1 px-3 rounded-full">Process</span>
                            </td>
                        </tr>
                        <tr class="border-b border-[#D5D5D5]">
                            <td class="py-3 px-6 text-sm">3</td>
                            <td class="py-3 px-6 text-sm">12-10-2023</td>
                            <td class="py-3 px-6 text-sm">Rp. 15.000</td>
                            <td class="py-3 px-6 text-sm">
                                <span class="bg-[#FF0004] text-white text-xs py-1 px-3 rounded-full">Ditolak</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection
