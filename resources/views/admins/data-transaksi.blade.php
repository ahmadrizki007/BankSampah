@php
    $title = 'Data Transaksi';
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

            // handle select element
            $('#jenis-sampah').select2({
                dropdownAutoWidth: true,
                width: '100%',
                dropdownParent: $('body'),
            });

            $('#jenis-sampah2').select2({
                dropdownAutoWidth: true,
                width: '100%',
                dropdownParent: $('body'),
            });
        });
    </script>

@endpush

<x-admin-layout :title="$title">

    <div x-data="{ open: false}" class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Transaksi</h1>
            </div>
        </div>


        <!-- MAIN -->
        <div class="pb-4 bg-white dark:bg-gray-800 shadow-md rounded-xl">

            <header
                class="flex items-center justify-between px-5 py-4 mb-3 border-b border-gray-100 dark:border-gray-700/60">
                <h2 class="font-semibold text-gray-800 dark:text-gray-100">
                    Data Transaksi
                </h2>

                <button x-on:click="open = true"
                    class="inline-flex items-center justify-center space-x-2 py-2 px-4 border-2 text-sm font-medium shadow hover:shadow-lg hover:font-bold transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-black" viewBox="0 0 24 24"
                        fill="currentColor" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 4a1 1 0 011 1v6h6a1 1 0 110 2h-6v6a1 1 0 11-2 0v-6H5a1 1 0 110-2h6V5a1 1 0 011-1z"
                            clip-rule="evenodd" />
                    </svg>
                    <div>Tambah Data</div>
                </button>
            </header>
            <!-- Table-->
            <div class="px-4 overflow-x-auto">
                <table id="myTable" class="display min-w-full text-sm text-center">
                    <thead class="rounded-sm bg-gray-100 dark:bg-white/20 dark:text-white">
                        <tr>
                            <th class="px-6 py-3">NO</th>
                            <th class="px-6 py-3">Nama Nasabah</th>
                            <th class="px-6 py-3">Jenis Sampah</th>
                            <th class="px-6 py-3">Berat (KG)</th>
                            <th class="px-6 py-3">Harga</th>

                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-700 dark:bg-gray-800 dark:text-white">

                        <!-- Looping data -->
                        @php
                            $idx = 0;
                        @endphp
                        @foreach($data as $row)
                            <tr class="border-b">
                                <td class="px-6 py-4">{{ ++$idx }}</td>
                                <td class="px-6 py-4">
                                    {{ $row->user !== null ? $row->user->name : $row->usersanonym->nama }}
                                </td>
                                <td class="px-6 py-4">{{ $row->datasampah->jenis_sampah }}</td>
                                <td class="px-6 py-4">{{ $row->berat }}</td>
                                <td class="py-2 sm:px-4 px-2">
                                    Rp <span x-data="{ value: {{ $row->harga }} }" x-text="$rupiah(value)"></span>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal Tambah Data Transaksi -->
        <div class="fixed inset-0 z-50 bg-black/50" x-show="open" x-cloak></div>
        <div x-data="{ state: null }" x-show="open" x-on:click.away="open = false" x-cloak
            class="lg:w-2/5 md:w1/2 fixed z-50 top-2 left-1/2 -translate-x-1/2 rounded-xl shadow-lg bg-white dark:bg-gray-800">
            <header class="px-5 py-4 mb-4 border-b border-gray-100 dark:border-gray-700/60">

                <h2 x-show="state === null" x-transition class="font-semibold text-gray-800 dark:text-gray-100">
                    Pilihan User
                </h2>
                <h2 x-show="state !== null" x-transition class="font-semibold text-gray-800 dark:text-gray-100">
                    Form Tambah Transaksi
                </h2>
            </header>

            <!-- Pilihan Jenis Nasabah -->
            <div x-show="state === null" x-transition class="w-full px-5 py-2 space-y-6">
                <!-- Pilihan Transaksi Tanpa Akun -->
                <div
                    class="bg-white rounded-lg shadow-md border-2 border-gray-300 hover:bg-gray-50 transition duration-200">
                    <button x-on:click="state = '!terdaftar'"
                        class="w-full py-4 font-medium text-gray-800 flex justify-between items-center rounded-t-lg px-6">
                        <span>Transaksi Tanpa Akun (Cash In Langsung)</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                    <p class="text-sm text-gray-600 p-4 bg-gray-50 rounded-b-lg">
                        Transaksi untuk nasabah tidak
                        terdaftar.
                    </p>
                </div>

                <!-- Atau -->
                <p class="text-center text-sm text-gray-500">Atau</p>

                <!-- Pilihan Nasabah Terdaftar -->
                <div
                    class="bg-white rounded-lg shadow-md border-2 border-gray-300 hover:bg-gray-50 transition duration-200">
                    <button x-on:click="state = 'terdaftar'"
                        class="w-full py-4 font-medium text-gray-800 flex justify-between items-center rounded-t-lg px-6">
                        <span>Nasabah Terdaftar (Tabungan Sampah)</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                    <p class="text-sm text-gray-600 p-4 bg-gray-50 rounded-b-lg">
                        Transaksi untuk nasabah yang sudah
                        memiliki akun.
                    </p>
                </div>
            </div>


            <!-- User Tidak Terdaftar -->
            <form x-show="state === '!terdaftar'" x-transition x-ref="form1"
                action="{{ route('admin.dataTransaksi.store.tidakTerdaftar') }}" method="POST" class="px-5 ">
                @csrf

                <input type="hidden" :value="state" name="state">

                <div class="mb-4">
                    <label for="nama" class="block mb-2 font-medium dark:text-white">Nama</label>
                    <input type="text" name="nama" id="nama"
                        class="px-4 py-2 w-full block flex-1 rounded-lg text-sm outline-none bg-gray-50 border border-gray-300 text-gray-900 focus:ring-2 focus:ring-primary-300 focus:border-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-300 dark:focus:border-primary-300"
                        required placeholder="e.g : Budi">

                    @error('nama')
                        @if(session('state') == '!terdaftar')
                            <span x-show="false" x-init="state = '!terdaftar'"></span>
                        @endif
                        <p x-init="open = true" x-show="state === '!terdaftar'"
                            class="ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="nomor-telepon" class="block mb-2 font-medium dark:text-white">Nomor Telepon</label>
                    <input type="text" name="nomor_telepon" id="nomor-telepon"
                        class="px-4 py-2 w-full block flex-1 rounded-lg text-sm outline-none bg-gray-50 border border-gray-300 text-gray-900 focus:ring-2 focus:ring-primary-300 focus:border-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-300 dark:focus:border-primary-300"
                        required placeholder="e.g : 08xx xxxx xxxx"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')">

                    @error('nomor_telepon')
                        @if(session('state') == '!terdaftar')
                            <span x-show="false" x-init="state = '!terdaftar'"></span>
                        @endif
                        <p x-init="open = true" x-show="state === '!terdaftar'"
                            class="ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="berat" class="block mb-2 font-medium dark:text-white">Berat</label>
                    <div class="flex">
                        <input type="text" id="berat" name="berat"
                            class="px-4 py-2 w-full block flex-1 rounded-none rounded-s-lg text-sm outline-none bg-gray-50 border border-gray-300 text-gray-900 focus:ring-2 focus:ring-primary-300 focus:border-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-300 dark:focus:border-primary-300"
                            placeholder="Berat (kilogram)" required pattern="^[0-9]*$"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
                        <span
                            class="inline-flex items-center px-3 font-semibold text-sm text-gray-900 bg-gray-200 border rounded-s-0 border-gray-300 border-e-0 rounded-e-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            Kg
                        </span>
                    </div>

                    @error('berat')
                        @if(session('state') == '!terdaftar')
                            <span x-show="false" x-init="state = '!terdaftar'"></span>
                        @endif
                        <p x-init="open = true" x-show="state === '!terdaftar'"
                            class="ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="jenis-sampah2" class="block mb-2 font-medium dark:text-white">Jenis Sampah</label>

                    <select id="jenis-sampah2" name="jenis_sampah" required
                        class="px-4 py-2 w-full text-sm rounded-md outline-none bg-gray-50 border border-gray-300 text-gray-900  focus:ring-2 focus:ring-primary-300 focus:border-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-300 dark:focus:border-primary-300">
                        <option value="" disabled selected>Pilih Jenis Sampah</option>

                        @foreach ($dataJenisSampah as $row)
                            <option value="{{ $row->id }}">{{ $row->jenis_sampah }}</option>
                        @endforeach

                    </select>


                    @error('jenis_sampah')
                        @if(session('state') == '!terdaftar')
                            <span x-show="false" x-init="state = '!terdaftar'"></span>
                        @endif
                        <p x-init="open = true" x-show="state === '!terdaftar'"
                            class="alert-harga ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

            </form>

            <!-- User Terdaftar -->
            <form x-show="state === 'terdaftar'" x-transition x-ref="form2"
                action="{{ route('admin.dataTransaksi.store') }}" method="POST" class="px-5 pb-2">
                @csrf

                <input type="hidden" :value="state" name="state">

                <div x-data="userSearch()" class="mb-4 relative">
                    <label for="nama-nasabah" class="block mb-2 font-medium dark:text-white">Nama Nasabah</label>
                    <input x-model="search" @input.debounce.300ms="fetchUser" type="text" id="nama-nasabah"
                        name="nama_nasabah"
                        class="px-4 py-2 w-full text-sm rounded-md outline-none bg-gray-50 border border-gray-300 text-gray-900 focus:ring-2 focus:ring-primary-300 focus:border-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-300 dark:focus:border-primary-300"
                        placeholder="Cari user.." required>

                    <ul x-show="isResults()"
                        class="absolute z-10 max-h-30 overflow-auto w-full px-2 pt-1 rounded-b-md bg-gray-50 border border-gray-300 text-gray-900">
                        <template x-for="user in results" :key="user . id">
                            <li x-on:click="selectUser(user)" class="hover:bg-gray-300 cursor-pointer">
                                <span x-text="user.name">
                                </span>
                            </li>
                        </template>
                    </ul>

                    <!-- token storage -->
                    <div id="token" class="hidden">{{ $token }}</div>
                    <input id="user_id" type="hidden" name="user_id" :value="selectedId">

                    @error('user_id')
                        @if(session('state') == 'terdaftar')
                            <span x-show="false" x-init="state = 'terdaftar'"></span>
                        @endif
                        <p x-init="open = true" x-show="state === 'terdaftar'"
                            class="alert-user_id ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="berat" class="block mb-2 font-medium dark:text-white">Berat</label>
                    <div class="flex">
                        <input type="text" id="berat" name="berat"
                            class="px-4 py-2 w-full block flex-1 rounded-none rounded-s-lg text-sm outline-none bg-gray-50 border border-gray-300 text-gray-900 focus:ring-2 focus:ring-primary-300 focus:border-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-300 dark:focus:border-primary-300"
                            placeholder="Berat (kilogram)" required pattern="^[0-9]*$"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
                        <span
                            class="inline-flex items-center px-3 font-semibold text-sm text-gray-900 bg-gray-200 border rounded-s-0 border-gray-300 border-e-0 rounded-e-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            Kg
                        </span>
                    </div>

                    @error('berat')
                        @if(session('state') == 'terdaftar')
                            <span x-show="false" x-init="state = 'terdaftar'"></span>
                        @endif
                        <p x-init="open = true" x-show="state === 'terdaftar'"
                            class="alert-berat ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="jenis-sampah" class="block mb-2 font-medium dark:text-white">Jenis Sampah</label>

                    <select id="jenis-sampah" name="jenis_sampah" required
                        class="px-4 py-2 w-full text-sm rounded-md outline-none bg-gray-50 border border-gray-300 text-gray-900  focus:ring-2 focus:ring-primary-300 focus:border-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-300 dark:focus:border-primary-300">
                        <option value="" disabled selected>Pilih Jenis Sampah</option>

                        @foreach ($dataJenisSampah as $row)
                            <option value="{{ $row->id }}">{{ $row->jenis_sampah }}</option>
                        @endforeach

                    </select>


                    @error('jenis_sampah')
                        @if(session('state') == 'terdaftar')
                            <span x-show="false" x-init="state = 'terdaftar'"></span>
                        @endif
                        <p x-init="open = true" x-show="state === 'terdaftar'"
                            class="alert-harga ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

            </form>

            <footer class="space-x-2 px-5 py-4 border-t border-gray-100 dark:border-gray-700/60" :class="state !== null ? 'flex justify-between' : ''">

                <button x-on:click="state = null" x-show="state !== null"
                    class="text-center py-2 px-4 rounded-md bg-white text-black/70 font-thin border border-gray-200 shadow hover:shadow-lg">
                    Kembali
                </button>

                <div class="text-right">
                    <button type="button" x-show="state === '!terdaftar'" x-on:click="$refs.form1.submit()"
                        class="text-center py-2 px-4 rounded-md bg-primary-300 text-white font-semibold shadow hover:shadow-lg hover:font-bold transition duration-200">
                        Simpan
                    </button>

                    <button type="button" x-show="state === 'terdaftar'" x-on:click="$refs.form2.submit()"
                        class="text-center py-2 px-4 rounded-md bg-primary-300 text-white font-semibold shadow hover:shadow-lg hover:font-bold transition duration-200">
                        Simpan
                    </button>

                    <button x-on:click="open = false"
                        class="text-center py-2 px-4 rounded-md bg-white text-black/70 font-thin border border-gray-200 shadow hover:shadow-lg">
                        Tutup
                    </button>

                </div>
            </footer>

        </div>

    </div>


    <!-- Khusus script search user -->
    <script>
        function userSearch() {
            return {
                search: '',
                results: null,
                selectedId: null,

                fetchUser() {
                    const token = document.getElementById('token').innerText;

                    fetch(`/api/search-user?q=${this.search}`, {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json',
                            'Authorization': `Bearer ${token}`,
                        }
                    })
                        .then(res => res.json())
                        .then(res => {
                            this.results = res.data;
                        })
                        .catch(error => {
                            console.error('Error api', error);
                        });
                },

                selectUser(user) {
                    this.search = user.name;
                    this.selectedId = user.id;
                    this.results = null;
                },

                isResults() {
                    if (this.search == '') {
                        this.results = null;
                    }
                    return this.results !== null;
                }
            }
        }

    </script>

</x-admin-layout>