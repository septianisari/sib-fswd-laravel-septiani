<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grup;

class GrupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Grup::create([
            'nama_pengguna' => 'Anisa',
            'status' => 'Admin',   
        ]);
        Grup::create([
            'nama_pengguna' => 'Farra',
            'status' => 'Staff',   
        ]);
        Grup::create([
            'nama_pengguna' => 'Kinar',
            'status' => 'Staff',   
        ]);
        Grup::create([
            'nama_pengguna' => 'Belden',
            'status' => 'Staff',   
        ]);
    }
}
