<x-email-layout>
    <header style="background-color: #276461; color: white; padding: 16px; text-align: center;">
        <img src="https://raw.githubusercontent.com/ahmadrizki007/asset-banksampah/main/logo.png" alt="logo" style="display:block; height: 64px; width: auto; margin-bottom: 8px;">
        <div style="text-align: center; margin: 0 auto;">
            <img src="https://raw.githubusercontent.com/ahmadrizki007/asset-banksampah/main/x-email-icon.png" alt="x-icon" style="display: block; width: 80px; margin: 0 auto 8px auto;">
        </div>
        <p style="font-size: 24px; font-weight: bold; margin-top: 8px;">Penarikan Ditolak</p>
    </header>

    <main style="padding: 16px; text-align: center;">
        <div>
            <h2 style="font-size: 20px; font-weight: bold; margin-bottom: 16px;">Hai {{ $nama }}</h2>
            <p>Mohon maaf, penarikan anda kami tolak</p>
        </div>

        <div style="box-shadow: 0 4px 8px rgba(0,0,0,0.1); max-width: 640px; margin: 0 auto; width: 100%; margin-bottom: 80px;">
            <table style="width: 100%; font-size: 14px; text-align: left; border-collapse: collapse;">
                <tbody>
                    <tr style="border-bottom: 3px solid #E5E5E5;">
                        <td style="background-color: #f7f7f7; padding: 12px; font-weight: 500; color: #4B4B4B; width: 50%;">Tanggal Penarikan</td>
                        <td style="padding: 12px; color: #1A1A1A;">{{ $tanggal }}</td>
                    </tr>
                    <tr style="border-bottom: 3px solid #E5E5E5;">
                        <td style="background-color: #f7f7f7; padding: 12px; font-weight: 500; color: #4B4B4B; width: 50%;">Total Penarikan</td>
                        <td style="padding: 12px; color: #1A1A1A;">Rp. {{ $jumlah }}</td>
                    </tr>
                    <tr style="border-bottom: 3px solid #E5E5E5;">
                        <td style="background-color: #f7f7f7; padding: 12px; font-weight: 500; color: #4B4B4B; width: 50%;">Alasan Penolakan</td>
                        <td style="padding: 12px; color: #1A1A1A;">{{ $catatan }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="text-align: center; margin: 20px auto;">
            <p style="font-weight: bold; font-size: 18px;">BANK SAMPAH SAHABAT GAJAH</p>
            <p style="font-size: 14px; color: #4A4A4A;">Jl. Airan Raya No.8, Way Huwi, lampung selatan, Kabupaten Lampung Selatan, Lampung 35141</p>
        </div>
    </main>
</x-email-layout>
