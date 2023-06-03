<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index() {

        $category= Category::all();
        return view ('tugaspert24.category', compact('category'));
    } 
    public function create() {

       
        return view ('tugaske24.category_create');
    } 

     public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'name_category' => 'required' ,
            'code' => 'required',
          
        ]);


        if($validator->fails()){
            return back()->withErrors($validator);
        }
        
        $category= Category::create([
            'name_category' => $request -> name_category,
            'code' => $request -> kode,
        ]);
       
        return redirect ('/category');
    } 

    public function edit($id) {

        $category= Category::where('id', $id)->first();
        
        return view ('tugaske24.category_edit', compact('category'));
    } 

    public function update(Request $request) {

        $validator = Validator::make($request->all(), [
            'name_category' => 'required' ,
            'code' => 'required',
          
        ]);


        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $category= Category::find($request->id)->update([
            'name_category' => $request -> name_category,
            'code' => $request -> kode,
        ]);
       
        return redirect ('/category');
    } 

    public function delete($id) {

        $category= Category::find($id)->delete();
       
        return redirect ('/category');
    } 
}
