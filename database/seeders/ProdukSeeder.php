<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $idRumahInspirasi = Program::where('nama', 'Rumah Inspirasi')->first();
        $idReloopMarket = Program::where('nama', 'Reloop Market')->first();

        $data = [
            [
                'gambar' => 'produk_img/R1.jpg',
                'nama' => 'Bantal',
                'harga' => '30000',
                'program_id' => $idRumahInspirasi->id,
            ],
            [
                'gambar' => 'produk_img/R2.jpg',
                'nama' => 'Tote Bag',
                'harga' => '15000',
                'program_id' => $idRumahInspirasi->id,
            ],
            [
                'gambar' => 'produk_img/R3.jpg',
                'nama' => 'Tumbler',
                'harga' => '10000',
                'program_id' => $idReloopMarket->id,
            ],
            [
                'gambar' => 'produk_img/R4.jpg',
                'nama' => 'Meja & Kursi Eco Brick',
                'harga' => '1000000',
                'program_id' => $idReloopMarket->id,
            ],
        ];

        foreach ($data as $d) {
            Product::create($d);
        }
    }
}
