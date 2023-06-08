<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Validator;

class ApiproductController extends Controller
{
    public function index() {

        $product= product::get();
        return response()->json([
            'status' => 200,
            'message'=> 'Data Berhasil diambil',
            'data' => $product,

        ]);
    }

    public function store(Request $request) {

        
        $validator = Validator::make($request->all(), [
            'name_product' => 'required|min:3' ,
            'category' => 'required',
            'price' => 'required|integer',
        ]);


        if($validator->fails()){
            return response()->withErrors($validator);
        }

        $product= product::create([
            'name_product' => $request -> name_product,
            'catgeory' => $request -> category,
            'price' => $request -> price,
        ]);
       
        return response()->json([
            'status' => 200,
            'message'=> 'Data Berhasil disimpan',
            'data' => $product,

        ]);
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
            'catgeory' => $request -> category,
            'price' => $request -> price,
        ]);
       
        return response()->json([
            'status' => 200,
            'message'=> 'Data Berhasil diedit',
            'data' => $product,

        ]);
    } 

    public function delete($id) {

        $product= product::find($id)->delete();
       
        return response()->json([
            'status' => 200,
            'message'=> 'Data Berhasil dihapus pada id ke '.$id,
            'data' => $product,

    ]);
}
}