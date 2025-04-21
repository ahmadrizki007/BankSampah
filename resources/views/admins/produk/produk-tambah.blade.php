@php
    $title = 'Pengelolaan Produk';
@endphp

@section('scripts')
    <script>
        // $(document).ready(function (e) {

        //     $('#image').change(function () {

        //         let reader = new FileReader();

        //         reader.onload = (e) => {

        //             $('#preview-image-before-upload').attr('src', e.target.result);
        //         }

        //         reader.readAsDataURL(this.files[0]);

        //     });

        // });
    </script>
@endsection

<x-admin-layout :title="$title">

    <div class="px-4 sm:px-6 lg:px-8 py-8 max-w-9xl">

        <!-- Button back -->
        <a href="{{ route('admin.produk') }}" class="hover:font-bold cursor pointer">
            <img src="{{ asset('icons/left-arrow.svg') }}" alt="back" width="20" class="inline-block">
            <span class="ms-1 mt-1">Kembali</span>
        </a>


        <!-- MAIN -->
        <div class="mt-8 pb-4 bg-white dark:bg-gray-800 shadow-md rounded-xl">

            <header
                class="flex items-center justify-between px-5 py-4 mb-3 border-b border-gray-100 dark:border-gray-700/60">
                <h2 class="font-semibold text-gray-800 dark:text-gray-100">
                    Form Produk
                </h2>
            </header>
            <!-- Table-->
            <div class="px-4 overflow-x-auto">
                <form action="{{ route('admin.produk.tambah.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-2 gap-4">
                        <div class="">
                            <div>
                                <label for="nama" class="block mb-2 font-medium dark:text-white">Nama Produk</label>
                                <input type="text" name="nama" id="nama" value="{{ (old('nama')) ? old('nama') : ''  }}"
                                    class="px-4 py-2 w-full text-sm rounded-md outline-none bg-gray-50 border border-gray-300 text-gray-900 focus:ring-2 focus:ring-primary-300 focus:border-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-300 dark:focus:border-primary-300">

                                @error('nama')
                                    <p class="ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="mt-2">
                                <label for="harga" class="block mb-2 font-medium dark:text-white">Harga Produk</label>
                                <div class="flex">
                                    <span
                                        class="inline-flex items-center px-3 font-semibold text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                        Rp.
                                    </span>
                                    <input x-mask:dynamic="$money($input, ',')" type="text" name="harga" id="harga"
                                        value="{{ (old('harga')) ? old('harga') : ''  }}"
                                        class="px-4 py-2 w-full block flex-1 rounded-none rounded-e-lg text-sm bg-gray-50 border border-gray-300 text-gray-900 outline-none focus:ring-2 focus:ring-primary-300 focus:border-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-300 dark:focus:border-primary-300">
                                </div>

                                @error('harga')
                                    <p class="ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div class="row flex flex-col justify-center items-center">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="file" name="gambar" placeholder="Pilih Gambar" id="image">

                                    @error('gambar')
                                        <p class="ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-2">
                                <img id="preview-image-before-upload" src="{{ asset('asset/bef-img-input.png')  }}"
                                    alt="preview image" style="max-height: 200px;">
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <button type="submit"
                            class="block flex-none text-center py-2 px-10 rounded-md bg-primary-300 text-white font-semibold shadow hover:shadow-lg hover:font-bold transition duration-200">
                            Tambah
                        </button>
                    </div>
                </form>
                </table>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function (e) {

            $('#image').change(function () {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>
</x-admin-layout>