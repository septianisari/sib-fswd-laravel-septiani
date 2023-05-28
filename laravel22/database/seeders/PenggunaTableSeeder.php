<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengguna;

class PenggunaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengguna::create([
            'nama' => 'Anissa',
            'email' => 'anissa@gmail.com',   
        ]);
        Pengguna::create([
            'nama' => 'Farra',
            'email' => 'farra@gmail.com',   
        ]);
        Pengguna::create([
            'nama' => 'Kinar',
            'email' => 'kinar@gmail.com',   
        ]);
        Pengguna::create([
            'nama' => 'Belden',
            'email' => 'belden@gmail.com',   
        ]);
    }
}
