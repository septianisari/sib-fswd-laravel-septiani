<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dproduk;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class DprodukController extends Controller
{
    public function index() {

        $dproduk= Dproduk::all();
        return view ('tugaspert24.dproduk', compact('dproduk'));
    } 

    public function index2() {

        $dproduk= Dproduk::all();
        return view ('tugaske25.landing', compact('dproduk'));
    } 

    public function create() {
        
        return view ('tugaspert24.dproduk_create');
    } 

    public function store(Request $request) {

        
        $validator = Validator::make($request->all(), [
            'name_product' => 'required|min:3' ,
            'category' => 'required',
            'price' => 'required|integer',
        ]);


        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $dproduk= product::create([
            'name_product' => $request -> nama_produk,
            'kategori' => $request -> kategori,
            'harga' => $request -> harga,
        ]);
       
        return redirect ('/dproduk');
    } 

    public function edit($id) {

        $dproduk= Dproduk::where('id', $id)->first();
        
        return view ('tugaspert24.dproduk_edit', compact('dproduk'));
    } 

        
    }

    public function update(Request $request) {

        $validator = Validator::make($request->all(), [
            'name_product' => 'required|min:3' ,
            'category' => 'required',
            'price' => 'required|integer',
        ]);


        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $product= product::find($request->id)->update([
            'name_product' => $request -> name_product,
            'category' => $request -> category,
            'price' => $request -> price,
        ]);
       
        return redirect ('/product');
    } 

    public function delete($id) {

        $product= product::find($id)->delete();
       
        return redirect ('/product');
    } 
}