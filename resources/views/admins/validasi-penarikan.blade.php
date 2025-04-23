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

                        @php
                            $idx = 0;
                        @endphp
                        @foreach($data as $row)
                            <tr class="border-b">
                                <td class="px-6 py-4">{{ ++$idx }}</td>
                                <td class="px-6 py-4">{{ $row->user->name }}</td>
                                <td class="px-6 py-4">{{ $row->created_at_formatted }}</td>
                                <td class="py-2 sm:px-4 px-2">
                                    Rp <span x-data="{ value: {{ $row->jumlah_penarikan }} }"
                                        x-text="$rupiah(value)"></span>
                                </td>
                                <td class="px-6 py-4">

                                    @if ($row->state == 'process')
                                        <form class="inline-block" action="{{ route('admin.validasiPenarikan.tolak') }}"
                                            method="POST">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $row->user->id }}">
                                            <input type="hidden" name="id" value="{{ $row->id }}">
                                            <button class="bg-red-500 px-3 py-2 text-white rounded hover:bg-red-400">
                                                Tolak
                                            </button>
                                        </form>


                                        <form class="inline-block" action="{{ route('admin.validasiPenarikan.terima') }}"
                                            method="POST">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $row->user->id }}">
                                            <input type="hidden" name="id" value="{{ $row->id }}">
                                            <input type="hidden" name="jumlah_penarikan" value="{{ $row->jumlah_penarikan }}">
                                            <button type="submit"
                                                class="bg-green-500 px-3 py-2 text-white rounded hover:bg-green-400">
                                                Terima
                                            </button>
                                        </form>
                                    @else
                                        @if ($row->state == 'accepted')
                                            <span class="bg-primary-500 text-white text-xs py-1 px-3 rounded-full">Berhasil</span>
                                        @else
                                            <span class="bg-red-500 text-white text-xs py-1 px-3 rounded-full">Ditolak</span>
                                        @endif

                                    @endif

                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-admin-layout>