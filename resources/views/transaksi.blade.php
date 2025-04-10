@extends('templates.layout')

@section('title')
    <title>Transaksi</title>
@endsection

@section('main')

    <div class="w-full sm:p-6 p-4 sm:flex items-start lg:gap-8 gap-4 bg-primary-bg shadow-md text-black">

        <!-- Side Bar -->
        <x-sidebar />

        <!-- Main Page -->
        <div class="w-full sm:flex mt-6 sm:mt-0 flex-col sm:p-6 p-3 bg-white rounded-xl shadow-md overflow-hidden">

            <!-- Title and Search Bar -->
            <div class="sm:mb-6 mb-3">
                <div class="sm:text-2xl text-lg font-bold text-primary-500">
                    Transaksi
                </div>
            </div>


            <div class="flex justify-between items-center space-x-4 mb-6">
                <!-- Show Entries -->
                <div class="flex items-center gap-2">
                    <span class="text-sm text-gray-500">Show</span>
                    <input type="number" id="entries" value="10" min="1" max="10" step="1"
                        class="sm:py-2 sm:px-3 px-2 py-1 border border-gray-300 rounded-md text-sm text-center sm:w-16 focus:ring-2 focus:ring-blue-500 [&::-webkit-inner-spin-button]:opacity-100 [&::-webkit-outer-spin-button]:opacity-100" />
                    <span class="text-sm text-gray-500 sm:block hidden">entries</span>
                </div>

                <!-- Search Bar -->
                <div class="flex items-center gap-2">
                    <label for="search" class="text-sm text-gray-500">Search:</label>
                    <input type="text" id="search" placeholder=""
                        class="sm:py-2 sm:px-3 px-2 py-1 rounded-md border bg-white border-gray-300 text-sm sm:w-48" />
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="table-auto w-full text-left border-collapse text-slate-500 sm:text-lg text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 sm:px-5 px-2 sm:font-medium">No</th>
                            <th class="py-3 sm:px-5 px-2 sm:font-medium">Tanggal Transaksi</th>
                            <th class="py-3 sm:px-5 px-2 sm:font-medium">Berat (kg)</th>
                            <th class="py-3 sm:px-5 px-2 sm:font-medium">Pendapatan</th>
                            <th class="py-3 sm:px-5 px-2 sm:font-medium">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 sm:px-5 px-2">1</td>
                            <td class="py-3 sm:px-5 px-2">14-11-2023</td>
                            <td class="py-3 sm:px-5 px-2">1</td>
                            <td class="py-3 sm:px-5 px-2">Rp. 5.000</td>
                            <td class="py-3 sm:px-5 px-2">
                                <a href="#" class="text-white bg-slate-500 sm:text-base text-xs px-2 py-1 rounded-md">Detail</a>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 sm:px-5 px-2">2</td>
                            <td class="py-3 sm:px-5 px-2">14-10-2023</td>
                            <td class="py-3 sm:px-5 px-2">2</td>
                            <td class="py-3 sm:px-5 px-2">Rp. 10.000</td>
                            <td class="py-3 sm:px-5 px-2">
                                <a href="#" class="text-white bg-slate-500 sm:text-base text-xs px-2 py-1 rounded-md">Detail</a>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 sm:px-5 px-2">3</td>
                            <td class="py-3 sm:px-5 px-2">12-1-2023</td>
                            <td class="py-3 sm:px-5 px-2">7</td>
                            <td class="py-3 sm:px-5 px-2">Rp. 315.000</td>
                            <td class="py-3 sm:px-5 px-2">
                                <a href="#" class="text-white bg-slate-500 sm:text-base text-xs px-2 py-1 rounded-md">Detail</a>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 sm:px-5 px-2">4</td>
                            <td class="py-3 sm:px-5 px-2">11-11-2021</td>
                            <td class="py-3 sm:px-5 px-2">2</td>
                            <td class="py-3 sm:px-5 px-2">Rp. 10.000</td>
                            <td class="py-3 sm:px-5 px-2">
                                <a href="#" class="text-white bg-slate-500 sm:text-base text-xs px-2 py-1 rounded-md">Detail</a>
                            </td>
                        </tr>
                        <!-- Add more rows as necessary -->
                    </tbody>
                </table>
            </div>

            <div class="flex items-center gap-2 mt-4 justify-end">
                <!-- Previous Button -->
                <button
                    class="sm:px-4 sm:py-2 px-2 py-1 rounded-md text-sm border border-primary-gray hover:bg-gray-100 focus:ring-2 focus:ring-blue-500">
                    Previous
                </button>

                <!-- Page Number -->
                <div class="flex items-center gap-2">
                    <span class="sm:px-4 sm:py-2 px-2 py-1 rounded-md text-sm border border-black ">1</span>
                </div>

                <!-- Next Button -->
                <button
                    class="sm:px-4 sm:py-2 px-2 py-1 rounded-md text-sm border border-primary-gray  hover:bg-gray-100 focus:ring-2 focus:ring-blue-500">
                    Next
                </button>
            </div>
        </div>
    </div>

@endsection
