<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grup;

class GrupController extends Controller
{
    public function index() {

        $grup= Grup::all();
        return view ('tugaske24.grup', compact('grup'));
    } 

    public function create() {
        
        return view ('tugaske24.grup_create');
    } 

    public function store(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'name_user' => 'required|min:3' ,
            'status' => 'required|min:3',
          
        ]);


        if($validator->fails()){
            return back()->withErrors($validator);
        }

        
        $grup= Grup::create([
            'name_user' => $request -> name_user,
            'status' => $request -> status,
            
        ]);
       
        return redirect ('/grup');
    } 

    public function edit($id) {

        $grup= Grup::where('id', $id)->first();
        
        return view ('tugaske24.grup_edit', compact('grup'));
    } 

    public function update(Request $request) {

        $validator = Validator::make($request->all(), [
            'name_user' => 'required|min:3' ,
            'status' => 'required|min:3',
          
        ]);


        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $grup= Grup::find($request->id)->update([
            'name_user' => $request -> name_user,
            'status' => $request -> status,
        ]);
       
        return redirect ('/grup');
    } 

    public function delete($id) {

        $grup= Grup::find($id)->delete();
       
        return redirect ('/grup');
    } 
}
