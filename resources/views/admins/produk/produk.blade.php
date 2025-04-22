@php
    $title = 'Pengelolaan Produk';
@endphp

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

                <a href="{{ route('admin.produk.tambah') }}"
                    class="inline-flex items-center justify-center space-x-2 py-2 px-4 border-2 text-sm font-medium shadow hover:shadow-lg hover:font-bold transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-black" viewBox="0 0 24 24"
                        fill="currentColor" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 4a1 1 0 011 1v6h6a1 1 0 110 2h-6v6a1 1 0 11-2 0v-6H5a1 1 0 110-2h6V5a1 1 0 011-1z"
                            clip-rule="evenodd" />
                    </svg>
                    <div>Tambah Produk</div>
                </a>
            </header>
            <!-- Table-->
            <div class="px-4 overflow-x-auto">
                <table id="myTable" class="display min-w-full text-sm text-center">
                    <thead class="rounded-sm bg-gray-100 dark:bg-white/20 dark:text-white">
                        <tr>
                            <th class="px-6 py-3">NO</th>
                            <th class="px-6 py-3">Gambar</th>
                            <th class="px-6 py-3">Program</th>
                            <th class="px-6 py-3">Nama</th>
                            <th class="px-6 py-3">Harga</th>
                            <th class="px-6 py-3"></th>

                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-700 dark:bg-gray-800 dark:text-white">

                        @php
                            $idx = 0;
                        @endphp
                        @foreach ($data as $row)
                            <tr class="border-b">
                                <td class="px-6 py-4">{{ ++$idx }}</td>
                                <td class="flex justify-center px-6 py-4">
                                    <img src="{{ asset($row->gambar) }}" alt="produk" class="w-40 rounded-md">
                                </td>
                                <td class="px-6 py-4">{{ $row->program->nama }}</td>
                                <td class="px-6 py-4">{{ $row->nama }}</td>
                                <td class="px-6 py-4">Rp <span x-data="{value: {{ $row->harga }}}"
                                        x-text="$rupiah(value)"></span></td>
                                <td class="px-6 py-4 space-x-2">

                                    <a href="{{ url('admin/produk/edit/' . (string) $row->id) }}"
                                        class="bg-yellow-400 px-3 py-2 text-white rounded hover:bg-yellow-300">
                                        Edit
                                    </a>


                                    <form class="inline-block" action="{{ route('admin.produk.destroy') }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="id" value="{{ $row->id }}">
                                        <button class="bg-red-500 px-3 py-2 text-white rounded hover:bg-red-400">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>

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

</x-admin-layout>