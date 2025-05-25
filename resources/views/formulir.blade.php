@extends('templates.layout')

@section('title')
    <title> Formulir Kunjungan </title>
@endsection

@section('main')

    <main class="w-full text-black bg-primary-bg py-14 sm:py-10 sm:px-14 px-5">

        <!-- Judul Formulir -->
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="sm:text-4xl text-2xl font-bold text-primary-500 mb-6">
                Formulir Kunjungan <br />
                <span class="font-caveat text-lg">"BANK SAMPAH SAHABAT GAJAH"</span>
            </h2>

            <p class="sm:text-lg text-black mb-6">
                Silakan isi formulir di bawah ini untuk melakukan kunjungan ke Bank Sampah Sahabat Gajah. Kami tunggu
                kedatangan Anda!
            </p>
        </div>

        <!-- Formulir Input -->
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <form action="{{ route('formulir.tambah') }}" method="POST">
                @csrf
                <div class="sm:space-y-6 space-y-2 sm:text-lg">
                    <!-- Nama Lengkap -->
                    <div>
                        <label for="name" class="block font-medium text-primary-500">Nama Lengkap</label>
                        <input type="text" id="name" name="nama_lengkap"
                            class="mt-1 w-full sm:p-4 p-2 border border-primary-gray rounded-lg"
                            placeholder="Masukkan Nama Lengkap Anda" required>
                        @error('nama_lengkap')
                            <p class="alert-user_id ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- Email -->
                    <div>
                        <label for="email" class="block font-medium text-primary-500">Alamat Email</label>
                        <input type="email" id="email" name="email"
                            class="mt-1 w-full sm:p-4 p-2 border border-primary-gray rounded-lg"
                            placeholder="Contoh: email@example.com" required>
                        @error('email')
                            <p class="alert-user_id ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- Nomor Telepon -->
                    <div>
                        <label for="phone" class="block font-medium text-primary-500">Nomor Telepon</label>
                        <input type="text" id="phone" name="nomor_telepon" 
                            class="mt-1 w-full sm:p-4 p-2 border border-primary-gray rounded-lg"
                            placeholder="Masukkan Nomor Telepon Anda" required oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                        @error('nomor_telepon')
                            <p class="alert-user_id ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- Instansi -->
                    <div>
                        <label for="institution" class="block font-medium text-primary-500">Instansi</label>
                        <input type="text" id="institution" name="instansi"
                            class="mt-1 w-full sm:p-4 p-2 border border-primary-gray rounded-lg"
                            placeholder="Masukkan Instansi Anda" required>
                        @error('instansi')
                            <p class="alert-user_id ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- Tujuan Kunjungan -->
                    <div>
                        <label for="purpose" class="block font-medium text-primary-500">Tujuan Kunjungan</label>
                        <textarea id="purpose" name="tujuan_kunjungan" rows="4"
                            class="mt-1 w-full sm:p-4 p-2 border border-primary-gray rounded-lg"
                            placeholder="Tuliskan tujuan kunjungan Anda" required></textarea>

                        @error('tujuan_kunjungan')
                            <p class="alert-user_id ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- Submit Button -->
                    <div class="flex justify-center mt-6">
                        <button type="submit"
                            class="px-6 py-2 text-sm text-white bg-primary-500 rounded-2xl hover:bg-opacity-80 transition-colors duration-300">
                            Kirim Formulir
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </main>

@endsection

@section('scripts')
    <script></script>
@endsection