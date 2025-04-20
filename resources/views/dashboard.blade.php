@extends('templates.layout')

@section('title')
    <title>Profile</title>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#dashboard-table').DataTable({
                columnDefs: [
                    {
                        target: '_all',
                        className: '!text-center',
                    }
                ],
                stateSave: true,
            });
        });
    </script>
@endsection


@section('main')
    <div class="w-full sm:p-6 p-4 sm:flex items-start lg:gap-8 gap-4 bg-primary-bg shadow-md text-black">

        <!-- Side Bar -->
        <x-sidebar />

        <div class="w-full overflow-hidden mt-6 sm:mt-0">
            <!-- "Selamat Datang" Outside the Card -->
            <div class="sm:text-3xl text-xl font-bold text-primary-500 mb-6">
                Selamat Datang, {{ Auth::user()->name }}
            </div>

            <!-- Cards Container: Two cards side by side -->
            <div class="flex gap-6 lg:flex-row flex-col">
                <!-- Card: Dompet Kamu (Balance) -->
                <div x-data="{ mode: null,
                                                    balance: {{ Auth::user()->balance }}, 
                                                    amount: '',
                                                    get numericAmount() {
                                                        return Number(this.amount.replaceAll('.', '').replaceAll(',', '')) || 0;
                                                    },
                                                    get error() {
                                                        return this.numericAmount > this.balance;
                                                    }
                                                    }"
                    class="sm:p-6 h-full p-3 bg-white rounded-lg shadow-lg flex flex-col">
                    <div class="sm:text-2xl text-lg text-gray-600 mb-4">Dompet Kamu</div>
                    <div class="sm:text-lg font-inter text-primary-gray">Saldo Tersedia</div>
                    <div class="sm:text-4xl text-3xl font-semibold mt-4 mb-4">
                        Rp <span x-data="{ value: {{ Auth::user()->balance }} }" x-text="$rupiah(value)"></span>
                    </div>

                    <!-- Button -->
                    <div x-show="mode === null" x-transition class="flex gap-4 sm:mt-6 mt-2">
                        <button x-on:click="mode = 'tarik'"
                            class="py-2 px-6 bg-blue-500 text-white rounded-md text-sm w-full md:w-auto">
                            Tarik
                            Saldo
                        </button>
                        <button x-on:click="mode = 'donasi'"
                            class="py-2 px-6 bg-primary-500 text-white rounded-md text-sm w-full md:w-auto">
                            Donasi
                            Gajah
                        </button>
                    </div>

                    <!-- Tarik saldo -->
                    <form x-show="mode === 'tarik'" x-transition action="{{ route('penarikan.tarikSaldo') }}" method="POST"
                        class="pt-4 border-t-2 border-gray-500">
                        @csrf

                        <span class="text-black/60 italic text-sm">Nominal Penarikan</span>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 font-semibold text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                Rp
                            </span>
                            <input x-model="amount" x-mask:dynamic="$money($input, ',')"
                                value="{{ (old('nominal')) ? old('nominal') : ''}}" type="text" name="nominal"
                                class="px-4 py-2 w-full block flex-1 rounded-none rounded-e-lg text-sm bg-gray-50 border border-gray-300 text-gray-900 outline-none focus:ring-2 focus:ring-primary-300 focus:border-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-300 dark:focus:border-primary-300"
                                placeholder="0" required>
                        </div>
                        <p x-show="error" class="ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">Saldo tidak cukup
                        </p>

                        <button x-on:click="mode = null; amount = ''" type="button"
                            class="w-full mb-1 mt-8 rounded-lg shadow-md text-white bg-gray-400 hover:bg-gray-400/90 hover:shadow-xl">
                            Batal
                        </button>
                        <button :disabled="error || numericAmount === 0" type="submit"
                            class="w-full py-2 rounded-lg shadow-md text-white bg-primary-500 hover:bg-primary-500/90 hover:shadow-xl cursor-pointer">
                            Tarik
                            Saldo
                        </button>
                    </form>



                    <!-- Donasi -->
                    <form x-show="mode === 'donasi'" x-transition action="{{ route('donasiGajah.donasi') }}" method="POST"
                        class="pt-4 border-t-2 border-gray-500">
                        @csrf

                        <span class="text-black/60 italic text-sm">Nominal Donasi</span>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 font-semibold text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                Rp
                            </span>
                            <input x-model="amount" x-mask:dynamic="$money($input, ',')"
                                value="{{ (old('nominal')) ? old('nominal') : ''}}" type="text" name="nominal"
                                class="px-4 py-2 w-full block flex-1 rounded-none rounded-e-lg text-sm bg-gray-50 border border-gray-300 text-gray-900 outline-none focus:ring-2 focus:ring-primary-300 focus:border-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-300 dark:focus:border-primary-300"
                                placeholder="0" required>
                        </div>
                        <p x-show="error" class="ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">Saldo tidak cukup
                        </p>

                        <button x-on:click="mode = null; amount = ''" type="button"
                            class="w-full mb-1 mt-8 rounded-lg shadow-md text-white bg-gray-400 hover:bg-gray-400/90 hover:shadow-xl">
                            Batal
                        </button>
                        <button :disabled="error || numericAmount === 0" type="submit"
                            class="w-full py-2 rounded-lg shadow-md text-white bg-primary-500 hover:bg-primary-500/90 hover:shadow-xl cursor-pointer">
                            Donasi
                        </button>
                    </form>

                </div>

                <!-- Card: Riwayat Transaksi (Transaction History) -->
                <div class="sm:p-6 p-3 bg-white rounded-lg shadow-lg flex-1">
                    <div class="sm:text-2xl text-lg text-gray-800 mb-4">
                        Riwayat Transaksi
                    </div>
                    <div class="sm:text-lg text-gray-500 mb-4">
                        Transaksi terakhir
                    </div>

                    <!-- Transaction History Table -->
                    <table id="dashboard-table" class="row-border">
                        <thead>
                            <tr class="border-b border-gray-200">
                                <th class="py-2 sm:px-4 px-2 sm:font-medium">No</th>
                                <th class="py-2 sm:px-4 px-2 sm:font-medium">Tanggal</th>
                                <th class="py-2 sm:px-4 px-2 sm:font-medium">Transaksi</th>
                                <th class="py-2 sm:px-4 px-2 sm:font-medium">Nominal</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $idx = 0;
                            @endphp

                            @foreach($data as $row)
                                <tr class="border-b border-gray-200">
                                    <td class="py-2 sm:px-4 px-2 text-center">{{ ++$idx }}</td>
                                    <td class="py-2 sm:px-4 px-2">{{ $row->created_at_formatted }}</td>
                                    <td class="py-2 sm:px-4 px-2">{{ $row->transaksi }}</td>
                                    <td class="py-2 sm:px-4 px-2">
                                        Rp <span x-data="{ value: {{ $row->harga }} }" x-text="$rupiah(value)"></span>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection