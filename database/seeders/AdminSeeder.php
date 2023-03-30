<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Petugas::create([
            'nama_petugas' => 'De Flovie Juan',
            'username' => 'admin123',
            'password' => Hash::make('admin123'),
            'telp' => '089516763211',
            'level' => 'admin'
        ]);
    }
}
