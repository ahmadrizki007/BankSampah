<?php

namespace Database\Seeders;

use App\Models\DataSampah;
use Illuminate\Database\Seeder;

class JenisSampahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //mock data
        $data = [
            ['jenis_sampah' => 'PET bersih bening', 'harga' => 4000],
            ['jenis_sampah' => 'Pet bersih BM', 'harga' => 3500],
            ['jenis_sampah' => 'Botol PET kotor', 'harga' => 2500],
            ['jenis_sampah' => 'Gelas / cup brsh', 'harga' => 4000],
            ['jenis_sampah' => 'Gelas / cup kotor', 'harga' => 1800],
            ['jenis_sampah' => 'Ale,Rio,torpedo', 'harga' => 1900],
            ['jenis_sampah' => 'Botol Transparan', 'harga' => 3600],
            ['jenis_sampah' => 'Tutup galon', 'harga' => 4000],
            ['jenis_sampah' => 'Botol oli', 'harga' => 3600],
            ['jenis_sampah' => 'Ember cor', 'harga' => 800],
            ['jenis_sampah' => 'Warna/ emberan', 'harga' => 1800],
            ['jenis_sampah' => 'Besi', 'harga' => 3200],
            ['jenis_sampah' => 'Kaleng', 'harga' => 2300],
            ['jenis_sampah' => 'Krey', 'harga' => 13000],
            ['jenis_sampah' => 'Almunium', 'harga' => 13000],
            ['jenis_sampah' => 'Kuningan', 'harga' => 50000],
            ['jenis_sampah' => 'Tembaga', 'harga' => 80000],
            ['jenis_sampah' => 'Kardus', 'harga' => 1900],
            ['jenis_sampah' => 'Hvs', 'harga' => 2000],
            ['jenis_sampah' => 'Karpet telur', 'harga' => 1500],
            ['jenis_sampah' => 'Buku cetak', 'harga' => 1000],
            ['jenis_sampah' => 'Buram', 'harga' => 1000],
            ['jenis_sampah' => 'Duplek', 'harga' => 500],
            ['jenis_sampah' => 'Aki motor', 'harga' => 7500],
            ['jenis_sampah' => 'Aki mobil', 'harga' => 7500],
            ['jenis_sampah' => 'Seng', 'harga' => 1000],
            ['jenis_sampah' => 'Inpek', 'harga' => 800],
            ['jenis_sampah' => 'Jely', 'harga' => 2000],
            ['jenis_sampah' => 'Kristal', 'harga' => 4000],
            ['jenis_sampah' => 'Paralon', 'harga' => 800],
            ['jenis_sampah' => 'Hitam', 'harga' => 800],
            ['jenis_sampah' => 'Jelantah', 'harga' => 5000],
        ];


        //insert to jenis sampah
        foreach ($data as $row) {
            DataSampah::create([
                'jenis_sampah' => $row['jenis_sampah'],
                'harga' => $row['harga'],
            ]);
        }
    }
}
