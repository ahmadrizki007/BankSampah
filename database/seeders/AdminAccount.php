<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminAccount extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Akun admin
        User::create([
            'role' => 'admin',
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin.123'),
        ]);
    }
}
