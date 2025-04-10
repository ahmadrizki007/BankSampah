@php
    $title = 'Donasi Gajah';
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
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Donasi Gajah</h1>
            </div>

            <!-- Right Card -->
            <div class="mt-4 sm:mt-0 bg-green-700 text-white shadow-md p-4 rounded-sm text-sm font-light italic">
                <p class="mb-1">Donasi Tekumpul</p>
                <p class="text-center font-bold">Rp.50.000</p>
            </div>
        </div>


        <!-- MAIN -->
        <div class="pb-4 bg-white dark:bg-gray-800 shadow-md rounded-xl">
            <header
                class="flex items-center justify-between px-5 py-4 mb-3 border-b border-gray-100 dark:border-gray-700/60">
                <h2 class="font-semibold text-gray-800 dark:text-gray-100">
                    Data Donasi
                </h2>
            </header>
            <!-- Table-->
            <div class="px-4 overflow-x-auto">
                <table id="myTable" class="display min-w-full text-sm text-center">
                    <thead class="rounded-sm bg-gray-100 dark:bg-white/20 dark:text-white">
                        <tr>
                            <th class="px-6 py-3">NO</th>
                            <th class="px-6 py-3">Nama Nasabah</th>
                            <th class="px-6 py-3">Donasi</th>

                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-700 dark:bg-gray-800 dark:text-white">
                        <tr class="border-b">
                            <td class="px-6 py-4">1</td>
                            <td class="px-6 py-4">Plastik</td>
                            <td class="px-6 py-4">Rp.5.000</td>
                        </tr>

                        <tr class="border-b">
                            <td class="px-6 py-4">2</td>
                            <td class="px-6 py-4">Sterofoam</td>
                            <td class="px-6 py-4">Rp.10.000</td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-6 py-4">3</td>
                            <td class="px-6 py-4">Besi</td>
                            <td class="px-6 py-4">Rp.15.000</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-admin-layout>