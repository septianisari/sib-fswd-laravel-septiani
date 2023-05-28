<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Category::create([
            'nama_kategori' => 'GROUP',
            'Kode' => 'AE',   
       ]);

       Category::create([
        'nama_kategori' => 'MERCHANDISE',
        'Kode' => 'K',   
   ]);

   
    Category::create([
        'nama_kategori' => 'ALBUM',
        'Kode' => 'F',   
    ]);

    Category::create([
        'nama_kategori' => 'PHOTOCARD',
        'Kode' => 'ATK',   
    ]);

    Category::create([
        'nama_kategori' => 'HOODIE',
        'Kode' => 'KBP',   
    ]);
    }
}
