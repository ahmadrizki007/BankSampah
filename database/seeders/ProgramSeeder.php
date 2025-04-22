<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Rumah Inspirasi',
            ],
            [
                'nama' => 'Reloop Market',
            ]
        ];

        foreach ($data as $d) {
            Program::create([
                'nama' => $d['nama'],
            ]);
        }
    }
}
