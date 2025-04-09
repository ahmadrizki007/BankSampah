@php
    $title = 'Validasi Penarikan';
@endphp

@push('scripts')

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                // Styling kolom tabel
                columnDefs: [
                    {
                        target: '_all',
                        className: '!text-center',
                    }
                ],
                // scrollY: 300,
                // scroller: true
            });
        });
    </script>

@endpush

<x-admin-layout :title="$title">
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Validasi Penarikan</h1>
            </div>
        </div>


        <!-- MAIN -->
        <div class="pb-4 bg-white dark:bg-gray-800 shadow-md rounded-xl">

            <header
                class="flex items-center justify-between px-5 py-4 mb-3 border-b border-gray-100 dark:border-gray-700/60">
                <h2 class="font-semibold text-gray-800 dark:text-gray-100">
                    Data Validasi Penarikan
                </h2>
            </header>
            <!-- Table-->
            <div class="px-4 overflow-x-auto">
                <table id="myTable" class="display min-w-full text-sm text-center">
                    <thead class="rounded-sm bg-gray-100 dark:bg-white/20 dark:text-white">
                        <tr>
                            <th class="px-6 py-3">NO</th>
                            <th class="px-6 py-3">Nama Nasabah</th>
                            <th class="px-6 py-3">Tanggal</th>
                            <th class="px-6 py-3">Jumlah Penarikan</th>
                            <th class="px-6 py-3"></th>

                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-700 dark:bg-gray-800 dark:text-white">
                        <tr class="border-b">
                            <td class="px-6 py-4">1</td>
                            <td class="px-6 py-4">Surtini</td>
                            <td class="px-6 py-4">10-10-2025</td>
                            <td class="px-6 py-4">Rp.50.000</td>
                            <td class="px-6 py-4">
                                <button class="bg-red-500 px-3 py-2 text-white rounded hover:bg-red-400">Tolak</button>
                                <button
                                    class="bg-green-500 px-3 py-2 text-white rounded hover:bg-green-400">Terima</button>
                            </td>
                        </tr>

                        <tr class="border-b">
                            <td class="px-6 py-4">2</td>
                            <td class="px-6 py-4">Marjono</td>
                            <td class="px-6 py-4">15-07-2024</td>
                            <td class="px-6 py-4">Rp.100.000</td>
                            <td class="px-6 py-4">
                                <button class="bg-red-500 px-3 py-2 text-white rounded hover:bg-red-400">Tolak</button>
                                <button
                                    class="bg-green-500 px-3 py-2 text-white rounded hover:bg-green-400">Terima</button>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-6 py-4">3</td>
                            <td class="px-6 py-4">Prabowo</td>
                            <td class="px-6 py-4">01-04-2025</td>
                            <td class="px-6 py-4">Rp.125.000</td>
                            <td class="px-6 py-4">
                                <button class="bg-red-500 px-3 py-2 text-white rounded hover:bg-red-400">Tolak</button>
                                <button
                                    class="bg-green-500 px-3 py-2 text-white rounded hover:bg-green-400">Terima</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-admin-layout>