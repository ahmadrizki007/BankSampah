@extends('templates.layout')

@section('title')
    <title>Transaksi</title>
@endsection

@section('main')

    <div class="w-full p-8 flex items-start gap-x-8 bg-[#ececec]">

        <!-- Side Bar -->
        <x-sidebar />

        <!-- Main Page -->
        <div class="w-full flex flex-col py-6 px-8 bg-white rounded-xl shadow-md">

            <!-- Title and Search Bar -->
            <div class="flex justify-between items-center mb-6">
                <div class="text-2xl font-semibold text-[#276561]">
                    Transaksi
                </div>
            </div>


            <div class="flex justify-between items-center space-x-4 mb-6">

                <!-- Show Entries -->
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-500">Show</span>
                    <input type="number" id="entries" value="10" min="1" max="10" step="1"
                        class="py-2 px-3 border border-gray-300 rounded-md text-sm text-center w-16 focus:ring-2 focus:ring-[#3182CE] [&::-webkit-inner-spin-button]:opacity-100 [&::-webkit-outer-spin-button]:opacity-100" />
                    <span class="text-sm text-gray-500">entries</span>
                </div>

                <!-- Search Bar -->
                <div class="flex items-center space-x-4">
                    <label for="search" class="text-sm text-gray-500">Search:</label>
                    <input type="text" id="search" placeholder=""
                        class="py-1.5 px-3 rounded-md border bg-white border-gray-300 text-sm w-48" />
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="table-auto w-full text-left border-collapse">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 px-6 text-[#7F8694] text-sm font-medium">No</th>
                            <th class="py-3 px-6 text-[#7F8694] text-sm font-medium">Tanggal Transaksi</th>
                            <th class="py-3 px-6 text-[#7F8694] text-sm font-medium">Berat (kg)</th>
                            <th class="py-3 px-6 text-[#7F8694] text-sm font-medium">Pendapatan</th>
                            <th class="py-3 px-6 text-[#7F8694] text-sm font-medium">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-[#D5D5D5]">
                            <td class="py-3 px-6 text-sm">1</td>
                            <td class="py-3 px-6 text-sm">14-11-2023</td>
                            <td class="py-3 px-6 text-sm">1</td>
                            <td class="py-3 px-6 text-sm">Rp. 5.000</td>
                            <td class="py-3 px-6 text-sm">
                                <a href="#" class="bg-[#7F8694] text-white text-xs px-3 py-1 rounded-md">View Detail</a>
                            </td>
                        </tr>
                        <tr class="border-b border-[#D5D5D5]">
                            <td class="py-3 px-6 text-sm">2</td>
                            <td class="py-3 px-6 text-sm">14-10-2023</td>
                            <td class="py-3 px-6 text-sm">2</td>
                            <td class="py-3 px-6 text-sm">Rp. 10.000</td>
                            <td class="py-3 px-6 text-sm">
                                <a href="#" class="bg-[#7F8694] text-white text-xs px-3 py-1 rounded-md">View Detail</a>
                            </td>
                        </tr>
                        <tr class="border-b border-[#D5D5D5]">
                            <td class="py-3 px-6 text-sm">3</td>
                            <td class="py-3 px-6 text-sm">12-1-2023</td>
                            <td class="py-3 px-6 text-sm">7</td>
                            <td class="py-3 px-6 text-sm">Rp. 315.000</td>
                            <td class="py-3 px-6 text-sm">
                                <a href="#" class="bg-[#7F8694] text-white text-xs px-3 py-1 rounded-md">View Detail</a>
                            </td>
                        </tr>
                        <tr class="border-b border-[#D5D5D5]">
                            <td class="py-3 px-6 text-sm">4</td>
                            <td class="py-3 px-6 text-sm">11-11-2021</td>
                            <td class="py-3 px-6 text-sm">2</td>
                            <td class="py-3 px-6 text-sm">Rp. 10.000</td>
                            <td class="py-3 px-6 text-sm">
                                <a href="#" class="bg-[#7F8694] text-white text-xs px-3 py-1 rounded-md">View Detail</a>
                            </td>
                        </tr>
                        <!-- Add more rows as necessary -->
                    </tbody>
                </table>
            </div>

            <div class="flex items-center space-x-2 mt-4 justify-end">
                <!-- Previous Button -->
                <button
                    class="px-4 py-2 text-sm text-[#7F8694] border border-[#BBBFC1] hover:bg-gray-100 focus:ring-2 focus:ring-[#3182CE]">
                    Previous
                </button>

                <!-- Page Number -->
                <div class="flex items-center space-x-2">
                    <span class="px-4 py-2 text-sm text-[#7F8694] border border-black ">1</span>

                </div>

                <!-- Next Button -->
                <button
                    class="px-4 py-2 text-sm text-[#7F8694] border border-[#BBBFC1]  hover:bg-gray-100 focus:ring-2 focus:ring-[#3182CE]">
                    Next
                </button>
            </div>
        </div>
    </div>

@endsection