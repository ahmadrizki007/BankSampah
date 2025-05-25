<x-email-layout>
    <header class="bg-primary-500 text-white p-4 flex flex-col">
        <img src="{{ asset('favicon.ico') }}" alt="logo" class="h-16 w-auto self-start">
        <img src="{{ asset('svg_asset/x-email-icon.svg') }}" alt="x-icon" width="80" class="mb-2 self-center">

        <p class="text-2xl font-bold self-center">Penarikan Ditolak</p>
    </header>

    <main class="flex gap-10 flex-col p-4">
        <div>
            <h2 class="text-xl font-bold mb-4">Hai {{ $nama }}</h2>
            <p>Mohon maaf, penarikan anda kami tolak</p>
        </div>

        <div class="shadow-md max-w-md mx-auto w-full mb-20">
            <table class="w-full text-sm text-left">
                <tbody>
                    <tr class="border-b-[3px] border-gray-200">
                        <td class="bg-gray-100 p-3 font-medium text-gray-700 w-1/2">Tanggal Penarikan</td>
                        <td class="p-3 text-gray-900">23–04–2025</td>
                    </tr>
                    <tr class="border-b-[3px] border-gray-200">
                        <td class="bg-gray-100 p-3 font-medium text-gray-700 w-1/2">Total Penarikan</td>
                        <td class="p-3 text-gray-900">23–04–2025</td>
                    </tr>
                    <tr class="border-b-[3px] border-gray-200">
                        <td class="bg-gray-100 p-3 font-medium text-gray-700 w-1/2">Alasan Penolakan</td>
                        <td class="p-3 text-gray-900">23–04–2025</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div>
            <p class="text-center font-bold">BANK SAMPAH SAHABAT GAJAH</p>
            <p class="text-center">Jl. Airan Raya No.8, Way Huwi, lampung selatan, Kabupaten Lampung Selatan, Lampung
                35141</p>
        </div>
    </main>
</x-email-layout>