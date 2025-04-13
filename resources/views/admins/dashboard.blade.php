@php
    $title = 'Dashboard';
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
                // scroller: true,
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
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Dashboard</h1>
            </div>
        </div>


        <!-- MAIN -->
        <div class="pb-4 bg-white dark:bg-gray-800 shadow-md rounded-xl">

            <header class="px-5 py-4 mb-3 border-b border-gray-100 dark:border-gray-700/60">
                <h2 class="font-semibold text-gray-800 dark:text-gray-100">
                    Form Data Nasabah
                </h2>
            </header>
            <!-- Table-->
            <div class="px-4 overflow-x-auto">
                <table id="myTable" class="display min-w-full text-sm text-center">
                    <thead class="rounded-sm bg-gray-100 dark:bg-white/20 dark:text-white">
                        <tr>
                            <th class="px-6 py-3">NO</th>
                            <th class="px-6 py-3">Nama</th>
                            <th class="px-6 py-3">Nomor Telepon</th>
                            <th class="px-6 py-3">Email</th>
                            <th class="px-6 py-3">Alamat</th>
                            <th class="px-6 py-3">Saldo</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-700 dark:bg-gray-800 dark:text-white">

                        <!-- Looping data -->
                        @php
                            $idx = 0;
                         @endphp
                        @foreach ($data as $row)

                            <tr class="border-b">
                                <td class="px-6 py-4"> {{ ++$idx }} </td>
                                <td class="px-6 py-4">{{ $row->name }}</td>
                                <td class="px-6 py-4">{{ $row->phone }} </td>
                                <td class="px-6 py-4"> {{ $row->email }} </td>
                                <td class="px-6 py-4"> {{ $row->address }} </td>
                                <td class="px-6 py-4">Rp.{{ $row->balance }}</td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-admin-layout>