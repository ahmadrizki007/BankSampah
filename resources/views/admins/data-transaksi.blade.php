@php
    $title = 'Data Transaksi';
@endphp

@push('head')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <!-- DataTables JS (pindahkan ke bawah jQuery jika perlu) -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

@endpush

<x-admin-layout :title="$title">
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Data Transaksi</h1>
            </div>
        </div>


        <!-- MAIN -->
        <div class="">

            <!-- Table-->
            <div class="overflow-x-auto">
                <table id="myTable" class="display min-w-full divide-y divide-gray-200 text-sm text-left">
                    <thead>
                        <tr>
                            <th class="px-6 py-3">NO</th>
                            <th class="px-6 py-3">Nama</th>
                            <th class="px-6 py-3">Nomor Telepon</th>
                            <th class="px-6 py-3">Email</th>
                            <th class="px-6 py-3">Alamat</th>
                            <th class="px-6 py-3">Saldo</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-700">
                        <tr class="border-b">
                            <td class="px-6 py-4">1</td>
                            <td class="px-6 py-4">pertama</td>
                            <td class="px-6 py-4">08578829300</td>
                            <td class="px-6 py-4">user1@gmail.com</td>
                            <td class="px-6 py-4">Jl Airan Raya</td>
                            <td class="px-6 py-4">Rp.100.000</td>
                        </tr>

                        <tr class="border-b">
                            <td class="px-6 py-4">2</td>
                            <td class="px-6 py-4">kedua</td>
                            <td class="px-6 py-4">08123456789</td>
                            <td class="px-6 py-4">user1@gmail.com</td>
                            <td class="px-6 py-4">Jl Airan Raya</td>
                            <td class="px-6 py-4">Rp.100.000</td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-6 py-4">3</td>
                            <td class="px-6 py-4">User 1</td>
                            <td class="px-6 py-4">08123456789</td>
                            <td class="px-6 py-4">user1@gmail.com</td>
                            <td class="px-6 py-4">Jl Airan Raya</td>
                            <td class="px-6 py-4">Rp.100.000</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-admin-layout>


@push('scripts')

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>


@endpush