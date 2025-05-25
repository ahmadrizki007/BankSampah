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
                                <td class="px-6 py-4">{{ $row->user !== null ? $row->user->name : $row->usersanonym->nama }}
                                </td>
                                <td class="px-6 py-4">{{ $row->created_at_formatted }}</td>
                                <td class="py-2 sm:px-4 px-2">
                                    Rp <span x-data="{ value: {{ $row->jumlah_penarikan }} }"
                                        x-text="$rupiah(value)"></span>
                                </td>
                                <td x-data="{ modalReject_{{ $row->id }}: false }" class="px-6 py-4">

                                    @if ($row->state == 'process')

                                        <div class="fixed inset-0 z-50 bg-black/50" x-show="modalReject_{{ $row->id }}" x-cloak>
                                        </div>
                                        <div x-show="modalReject_{{ $row->id }}"
                                            x-on:click.away="modalReject_{{ $row->id }} = false" x-cloak
                                            class="fixed z-50 top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-1/3 pb-4 rounded-xl shadow-lg bg-white dark:bg-gray-800">

                                            <form x-ref="form_{{ $row->id }}" class="inline-block p-4 w-full"
                                                action="{{ route('admin.validasiPenarikan.tolak') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{ $row->user->id }}">
                                                <input type="hidden" name="id" value="{{ $row->id }}">
                                                <div class="mb-4 w-full">
                                                    <label
                                                        class="block mb-2 text-start font-medium dark:text-white">Catatan</label>
                                                    <textarea
                                                        class="w-full p-2 border-2 rounded-lg border-neutral-300 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 mt-2"
                                                        name="note" placeholder="Alasan Penolakan"></textarea>
                                                </div>
                                            </form>

                                            <footer
                                                class="text-right space-x-2 px-5 py-4 border-t border-gray-100 dark:border-gray-700/60">
                                                <button type="button" x-on:click="$refs.form_{{ $row->id }}.submit()"
                                                    class="text-center py-2 px-4 rounded-md bg-primary-300 text-white font-semibold shadow hover:shadow-lg hover:font-bold transition duration-200">
                                                    Kirim
                                                </button>

                                                <button x-on:click="modalReject_{{ $row->id }} = false"
                                                    class="text-center py-2 px-4 rounded-md bg-white text-black/70 font-thin border border-gray-200 shadow hover:shadow-lg">Tutup</button>
                                            </footer>
                                        </div>

                                        <button x-on:click="modalReject_{{ $row->id }} = true"
                                            class="bg-red-500 px-3 py-2 text-white rounded hover:bg-red-400">
                                            Tolak
                                        </button>


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