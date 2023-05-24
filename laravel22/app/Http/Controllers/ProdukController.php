<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $namamhs = "Septiani Sari";
        $deskripsi = "Saya adalah mahasiswi semester 6 jurusan Rekayasa Perangkat Lunak di INSTITUT TEKNOLOGI TELKOM PURWOKERTO yang sedang Mengikuti Program Studi Independen di PT. Arkatama Multi Solusindo Path Fullstack Web Development. Saya memiliki cita cita menjadi seorang dosen di salah satu universitas negeri. Saya memiliki hobby memasak.";
        $nama = [
            'Laptop',
            'PC',
            'HP',
            'Flash Disk',
            'Mouse'
    ];


    return view ('tugaspert23.landing', compact('namamhs', 'deskripsi' ));
    return view ('master.product', compact('nama' ));

        
    }

    public function index2()
    {

    $kategori = [
        'Alat elektronik',
        'Kendaraan',
        'Fashion',
        'Alat Tulis Kantor',
        'Kebutuhan Pokok'
    ];

    $produk = [
        'Lampu Neon',
        'Mobil Avanza',
        'Mobil Jazz',
        'Baju Muslim',
        'Celana Cino',
        'Beras Cianjur'
    ];

    $pengguna = [
        'Asna',
        'Gery',
        'Gusti',
        'Jeniffer',
        'Dio',
        'Bobon',
        'Mikael',
        'Sintia'
    ];
    
    
    
    return view('tugaspert23.dashboard', compact('kategori', 'produk', 'pengguna'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}