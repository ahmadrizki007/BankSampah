@php
    $title = 'Data Sampah';
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

                //saving state while page got refresh in datatable
                stateSave: true,
            })

        });
    </script>

@endpush

<x-admin-layout :title="$title">

    <!-- Error notif -->
    @error('error')
        <x-errors.red :message="$message" />
    @enderror

    <!-- Success notif -->
    @if(session('success'))
        <x-errors.green :message="session('success')" />
    @endif


    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto" x-data="{ open: false }">

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Sampah</h1>
            </div>
        </div>


        <!-- MAIN -->
        <div class="pb-4 bg-white dark:bg-gray-800 shadow-md rounded-xl">

            <header
                class="flex items-center justify-between px-5 py-4 mb-3 border-b border-gray-100 dark:border-gray-700/60">
                <h2 class="font-semibold text-gray-800 dark:text-gray-100">
                    Data Sampah
                </h2>

                <button x-on:click="open = true"
                    class="inline-flex items-center justify-center space-x-2 py-2 px-4 border-2 text-sm font-medium shadow hover:shadow-lg hover:font-bold transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-black" viewBox="0 0 24 24"
                        fill="currentColor" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 4a1 1 0 011 1v6h6a1 1 0 110 2h-6v6a1 1 0 11-2 0v-6H5a1 1 0 110-2h6V5a1 1 0 011-1z"
                            clip-rule="evenodd" />
                    </svg>
                    <div>Tambah Jenis Sampah</div>
                </button>
            </header>
            <!-- Table-->
            <div class="px-4 overflow-x-auto">
                <table id="myTable" class="min-w-full text-sm text-center row-border">
                    <thead class="rounded-sm dark:bg-white/20 dark:text-white">
                        <tr>
                            <th class="px-6 py-3">NO</th>
                            <th class="px-6 py-3">Jenis Sampah</th>
                            <th class="px-6 py-3">Harga/kg</th>
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
                                <td class="px-6 py-4">{{ $row->jenis_sampah }}</td>
                                <td class="py-2 sm:px-4 px-2">
                                    Rp <span x-data="{ value: {{ $row->harga }} }" x-text="$rupiah(value)"></span>
                                </td>
                                <td x-data="{ openEdit{{ $row->id }}: false }" class="px-6 py-4 space-x-1">

                                    <button @click="openEdit{{ $row->id }} = true" type="button"
                                        class="inline-block bg-yellow-500 px-3 py-2 text-white rounded hover:bg-yellow-400">Edit</button>
                                    <form class="inline-block"
                                        action="{{ route('admin.dataSampah.destroy', ['id' => $row->id]) }}" method="post">
                                        @csrf
                                        @method('delete')

                                        <button type="submit"
                                            class="bg-red-500 px-3 py-2 text-white rounded hover:bg-red-400">Hapus</button>
                                    </form>


                                    <!-- Modal EDIT Data Sampah -->
                                    <div class="fixed inset-0 z-50 bg-black/50" x-show="openEdit{{ $row->id }}" x-cloak>
                                    </div>
                                    <div x-show="openEdit{{ $row->id }}" x-on:click.away="openEdit{{ $row->id }} = false"
                                        x-cloak
                                        class="text-left fixed z-50 top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-1/3 pb-4 rounded-xl shadow-lg bg-white dark:bg-gray-800">
                                        <header class="px-5 py-4 mb-4 border-b border-gray-100 dark:border-gray-700/60">
                                            <h2 class="font-semibold text-gray-800 dark:text-gray-100">
                                                Form Edit Data
                                            </h2>
                                        </header>

                                        <form x-ref="form_{{ $row->id }}" action="{{ route('admin.dataSampah.update')}}"
                                            method="POST" class="px-5">
                                            @csrf
                                            @method('PUT')

                                            <input type="hidden" value="{{ $row->id }}" name="id">

                                            <div class="mb-4">
                                                <label for="nama-nasabah-edit"
                                                    class="block mb-2 font-medium dark:text-white">
                                                    Jenis
                                                    Sampah
                                                </label>
                                                <input
                                                    value="{{ (old('jenis_sampah_' . (string) $row->id)) ? old('jenis_sampah_' . (string) $row->id) : $row->jenis_sampah }}"
                                                    type="text" id="nama-nasabah-edit" name="jenis_sampah_{{ $row->id }}"
                                                    class="px-4 py-2 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md outline-none focus:ring-2 focus:ring-primary-300 focus:border-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-300 dark:focus:border-primary-300"
                                                    placeholder="Nama" required>

                                                @if($errors->has('jenis_sampah_' . (string) $row->id))
                                                    <p x-init="openEdit{{ $row->id }} = true"
                                                        class="alert-nama-nasabah-edit ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                                                        {{ $errors->first('jenis_sampah_' . (string) $row->id) }}
                                                    </p>
                                                @endif

                                            </div>

                                            <div class="mb-4">
                                                <label for="harga-edit"
                                                    class="block mb-2 font-medium dark:text-white">Harga</label>
                                                <div x-data="formatter" class="flex">
                                                    <span
                                                        class="inline-flex items-center px-3 font-semibold text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                        Rp.
                                                    </span>
                                                    <input x-model="amount" @input="formatter" x-init="amount = $rupiah({{ (old('harga_' . (string) $row->id)) ? old('harga_' . (string) $row->id) : $row->harga }})"
                                                        value="{{ (old('harga_' . (string) $row->id)) ? old('harga_' . (string) $row->id) : $row->harga }}"
                                                        type="text" id="harga-edit" name="harga_{{ $row->id }}"
                                                        class="px-4 py-2 w-full block flex-1 rounded-none rounded-e-lg text-sm bg-gray-50 border border-gray-300 text-gray-900 outline-none focus:ring-2 focus:ring-primary-300 focus:border-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-300 dark:focus:border-primary-300"
                                                        placeholder="Harga (rupiah)" required pattern="^[0-9,.]*$"
                                                        oninput="this.value = this.value.replace(/[-]/g, '')">
                                                </div>

                                                @if($errors->has('harga_' . (string) $row->id))
                                                    <p x-init="openEdit{{ $row->id }} = true"
                                                        class="alert-harga-edit ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                                                        {{ $errors->first('harga_' . (string) $row->id) }}
                                                    </p>
                                                @endif
                                            </div>

                                        </form>

                                        <footer
                                            class="text-right space-x-2 px-5 py-4 border-t border-gray-100 dark:border-gray-700/60">
                                            <button type="button" x-on:click="$refs.form_{{ $row->id }}.submit()"
                                                class="text-center py-2 px-4 rounded-md bg-primary-300 text-white font-semibold shadow hover:shadow-lg hover:font-bold transition duration-200">
                                                Simpan
                                            </button>

                                            <button x-on:click="openEdit{{ $row->id }} = false"
                                                class="text-center py-2 px-4 rounded-md bg-white text-black/70 font-thin border border-gray-200 shadow hover:shadow-lg">Tutup</button>
                                        </footer>

                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>


        <!-- Modal Tambah Data Sampah -->
        <div class="fixed inset-0 z-50 bg-black/50" x-show="open" x-cloak></div>
        <div x-show="open" x-on:click.away="open = false" x-cloak
            class="fixed z-50 top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-1/3 pb-4 rounded-xl shadow-lg bg-white dark:bg-gray-800">
            <header class="px-5 py-4 mb-4 border-b border-gray-100 dark:border-gray-700/60">
                <h2 class="font-semibold text-gray-800 dark:text-gray-100">
                    Form Tambah Data
                </h2>
            </header>

            <form x-ref="form" action="{{ route('admin.dataSampah.store') }}" method="POST" class="px-5">
                @csrf

                <div class="mb-4">
                    <label for="nama-nasabah" class="block mb-2 font-medium dark:text-white">Jenis Sampah</label>
                    <input type="text" id="nama-nasabah" name="jenis_sampah" value="{{ old('jenis_sampah') }}"
                        class="px-4 py-2 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md outline-none focus:ring-2 focus:ring-primary-300 focus:border-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-300 dark:focus:border-primary-300"
                        placeholder="Nama" required>

                    @error('jenis_sampah')
                        <p x-init="open = true"
                            class="alert-nama-nasabah ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="harga" class="block mb-2 font-medium dark:text-white">Harga</label>
                    <div x-data="formatter" class="flex">
                        <span
                            class="inline-flex items-center px-3 font-semibold text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            Rp.
                        </span>
                        <input x-model="amount" @input="formatter" type="text" id="harga" name="harga"
                            value="{{ old('harga') }}"
                            class="px-4 py-2 w-full block flex-1 rounded-none rounded-e-lg text-sm bg-gray-50 border border-gray-300 text-gray-900 outline-none focus:ring-2 focus:ring-primary-300 focus:border-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-300 dark:focus:border-primary-300"
                            placeholder="Harga (rupiah)" required pattern="^[0-9,.]*$"
                            oninput="this.value = this.value.replace(/[-]/g, '')">
                    </div>

                    @error('harga')
                        <p x-init="open = true" class="alert-harga ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

            </form>

            <footer class="text-right space-x-2 px-5 py-4 border-t border-gray-100 dark:border-gray-700/60">
                <button type="button" x-on:click="$refs.form.submit()"
                    class="text-center py-2 px-4 rounded-md bg-primary-300 text-white font-semibold shadow hover:shadow-lg hover:font-bold transition duration-200">
                    Simpan
                </button>

                <button x-on:click="open = false"
                    class="text-center py-2 px-4 rounded-md bg-white text-black/70 font-thin border border-gray-200 shadow hover:shadow-lg">Tutup</button>
            </footer>

        </div>




    </div>
</x-admin-layout>