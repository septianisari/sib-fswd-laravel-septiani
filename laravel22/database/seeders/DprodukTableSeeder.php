<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dproduk;

class DprodukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dproduk::create([
            'nama_produk' => 'ALBUM',
            'kategori' => 'ALBUM',
            'harga' => 70000,   
       ]);
        Dproduk::create([
                'nama_produk' => 'PROOF',
                'kategori' => 'K',
                'harga' => 70000000,   
        ]);
        Dproduk::create([
            'nama_produk' => 'LIGHT STICK',
            'kategori' => 'F',
            'harga' => 700000,   
        ]);
    }
}
