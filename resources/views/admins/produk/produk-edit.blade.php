@php
    $title = 'Pengelolaan Produk';
@endphp

@section('scripts')

@endsection

<x-admin-layout :title="$title">

    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Pengelolaan Produk</h1>
            </div>
        </div>


        <!-- MAIN -->
        <div class="pb-4 bg-white dark:bg-gray-800 shadow-md rounded-xl">

            <header
                class="flex items-center justify-between px-5 py-4 mb-3 border-b border-gray-100 dark:border-gray-700/60">
                <h2 class="font-semibold text-gray-800 dark:text-gray-100">
                    Data Produk
                </h2>

                <button x-on:click="open = true"
                    class="inline-flex items-center justify-center space-x-2 py-2 px-4 border-2 text-sm font-medium shadow hover:shadow-lg hover:font-bold transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-black" viewBox="0 0 24 24"
                        fill="currentColor" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 4a1 1 0 011 1v6h6a1 1 0 110 2h-6v6a1 1 0 11-2 0v-6H5a1 1 0 110-2h6V5a1 1 0 011-1z"
                            clip-rule="evenodd" />
                    </svg>
                    <div>Tambah Produk</div>
                </button>
            </header>
            <!-- Table-->
            <div class="px-4 overflow-x-auto">
                <table id="myTable" class="display min-w-full text-sm text-center">
                    <thead class="rounded-sm bg-gray-100 dark:bg-white/20 dark:text-white">
                        <tr>
                            <th class="px-6 py-3">NO</th>
                            <th class="px-6 py-3">Gambar</th>
                            <th class="px-6 py-3">Nama</th>
                            <th class="px-6 py-3">Harga</th>
                            <th class="px-6 py-3"></th>

                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-700 dark:bg-gray-800 dark:text-white">

                        <tr class="border-b">
                            <td>1</td>
                            <td class="flex justify-center">
                                <img src="{{ asset('asset/G1.jpg') }}" alt="produk" width="50">
                            </td>
                            <td>ssggg</td>
                            <td></td>
                            <td></td>

                        </tr>


                    </tbody>
                </table>
            </div>
        </div>

    </div>

</x-admin-layout>