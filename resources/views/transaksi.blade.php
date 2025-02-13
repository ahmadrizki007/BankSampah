@extends('templates.layout')

@section('title')
    <title>Transaksi</title>
@endsection

@section('main')

    <div class="w-full p-6 flex items-start gap-x-8 bg-white">

        <!-- Side Bar -->
        <x-sidebar />

        <!-- Main Page -->
        <div class="w-full flex flex-col py-4 bg-main-500 rounded-xl shadow-lg">

            <!-- Title and Search Bar -->
            <div class="flex justify-between items-center mb-6">
                <div class="text-2xl font-bold text-[#276561]">
                    Transaksi
                </div>

                <!-- Search Bar -->
                <div class="flex items-center space-x-4">
                    <label for="search" class="text-sm text-gray-500">Search:</label>
                    <input type="text" id="search" placeholder=""
                        class="py-1 px-2 rounded-md border bg-main-500 border-gray-300 text-sm w-57" />
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="table-auto w-full text-left border-collapse">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2 px-4 text-[#7F8694] text-sm font-semibold">No</th>
                            <th class="py-2 px-4 text-[#7F8694] text-sm font-semibold">Tanggal Transaksi</th>
                            <th class="py-2 px-4 text-[#7F8694] text-sm font-semibold">Berat (kg)</th>
                            <th class="py-2 px-4 text-[#7F8694] text-sm font-semibold">Pendapatan</th>
                            <th class="py-2 px-4 text-[#7F8694] text-sm font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-[#D5D5D5]">
                            <td class="py-2 px-4 text-sm">1</td>
                            <td class="py-2 px-4 text-sm">14-11-2023</td>
                            <td class="py-2 px-4 text-sm">1</td>
                            <td class="py-2 px-4 text-sm">Rp. 5.000</td>
                            <td class="py-2 px-4 text-sm">
                                <a href="#" class="bg-[#7F8694] text-white text-xs px-3 py-1 rounded-md">View Detail</a>
                            </td>
                        </tr>
                        <tr class="border-b border-[#D5D5D5]">
                            <td class="py-2 px-4 text-sm">2</td>
                            <td class="py-2 px-4 text-sm">14-10-2023</td>
                            <td class="py-2 px-4 text-sm">2</td>
                            <td class="py-2 px-4 text-sm">Rp. 10.000</td>
                            <td class="py-2 px-4 text-sm">
                                <a href="#" class="bg-[#7F8694] text-white text-xs px-3 py-1 rounded-md">View Detail</a>
                            </td>
                        </tr>
                        <tr class="border-b border-[#D5D5D5]">
                            <td class="py-2 px-4 text-sm">3</td>
                            <td class="py-2 px-4 text-sm">12-1-2023</td>
                            <td class="py-2 px-4 text-sm">7</td>
                            <td class="py-2 px-4 text-sm">Rp. 315.000</td>
                            <td class="py-2 px-4 text-sm">
                                <a href="#" class="bg-[#7F8694] text-white text-xs px-3 py-1 rounded-md">View Detail</a>
                            </td>
                        </tr>
                        <tr class="border-b border-[#D5D5D5]">
                            <td class="py-2 px-4 text-sm">4</td>
                            <td class="py-2 px-4 text-sm">11-11-2021</td>
                            <td class="py-2 px-4 text-sm">2</td>
                            <td class="py-2 px-4 text-sm">Rp. 10.000</td>
                            <td class="py-2 px-4 text-sm">
                                <a href="#" class="bg-[#7F8694] text-white text-xs px-3 py-1 rounded-md">View Detail</a>
                            </td>
                        </tr>
                        <!-- Add more rows as necessary -->
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="flex justify-between items-center mt-6">
                <div>
                    <span class="text-sm text-[#7F8694]">Show 10 entries</span>
                </div>
                <div class="flex space-x-4">
                    <button
                        class="px-4 py-2 text-sm text-white bg-[#3182CE] rounded-md hover:bg-[#276561]">Previous</button>
                    <button class="px-4 py-2 text-sm text-white bg-[#3182CE] rounded-md hover:bg-[#276561]">Next</button>
                </div>
            </div>
        </div>
    </div>

@endsection