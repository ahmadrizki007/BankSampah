@extends('templates.layout')

@section('title')
<title> Formulir Kunjungan </title>
@endsection

@section('main')

<main class="w-full bg-[#FBFBFB] py-8 px-6">

    <!-- Judul Formulir -->
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-poppins font-semibold text-[#276561] mb-6">
            Formulir Kunjungan <br />
            <span class="font-caveat text-lg">"BANK SAMPAH SAHABAT GAJAH"</span>
        </h2>

        <p class="text-lg font-poppins text-[#000000] mb-6">
            Silakan isi formulir di bawah ini untuk melakukan kunjungan ke Bank Sampah Sahabat Gajah. Kami tunggu
            kedatangan Anda!
        </p>
    </div>

    <!-- Formulir Input -->
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <form action="/submit-form" method="POST">
            @csrf
            <div class="space-y-6">

                <!-- Nama Lengkap -->
                <div>
                    <label for="name" class="block text-lg font-medium text-[#276561]">Nama Lengkap</label>
                    <input type="text" id="name" name="name"
                        class="mt-1 w-full p-4 border border-[#9D9D9D] rounded-lg text-lg"
                        placeholder="Masukkan Nama Lengkap Anda" required>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-lg font-medium text-[#276561]">Alamat Email</label>
                    <input type="email" id="email" name="email"
                        class="mt-1 w-full p-4 border border-[#9D9D9D] rounded-lg text-lg"
                        placeholder="Contoh: email@example.com" required>
                </div>

                <!-- Nomor Telepon -->
                <div>
                    <label for="phone" class="block text-lg font-medium text-[#276561]">Nomor Telepon</label>
                    <input type="tel" id="phone" name="phone"
                        class="mt-1 w-full p-4 border border-[#9D9D9D] rounded-lg text-lg"
                        placeholder="Masukkan Nomor Telepon Anda" required>
                </div>

                <!-- Instansi -->
                <div>
                    <label for="institution" class="block text-lg font-medium text-[#276561]">Instansi</label>
                    <input type="text" id="institution" name="institution"
                        class="mt-1 w-full p-4 border border-[#9D9D9D] rounded-lg text-lg"
                        placeholder="Masukkan Instansi Anda" required>
                </div>

                <!-- Tujuan Kunjungan -->
                <div>
                    <label for="purpose" class="block text-lg font-medium text-[#276561]">Tujuan Kunjungan</label>
                    <textarea id="purpose" name="purpose" rows="4"
                        class="mt-1 w-full p-4 border border-[#9D9D9D] rounded-lg text-lg"
                        placeholder="Tuliskan tujuan kunjungan Anda" required></textarea>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center mt-6">
                    <button type="submit"
                        class="px-6 py-2 text-sm text-white bg-[#276561] rounded-2xl hover:bg-opacity-80 transition-colors duration-300">
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