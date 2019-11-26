<?php

namespace App\Http\Controllers;
use App\Utilities;
use DB;
use App\UtensilsCategory;
use Illuminate\Http\Request;

class UtilitiesController extends Controller
{
    public function index()
    {
    	$utilities = Utilities::all();
    	return view('utilities.index')->with('utilities', $utilities);
    }
    public function create()
    {   
        $utilities = Utilities::all();
        $utensils_category = UtensilsCategory::all();
        return view('utilities.create', compact('utensils_category'));
    }
    public function edit(Utilities $utility){
        $utensils_category = UtensilsCategory::all();
        return view('utilities.edit', compact('utility','utensils_category'));
        //dd($teacher);
    }
    public function store()
    {
        request()->validate([
            'description' => 'required',
            'category_u' => 'required',  
            'quantity' => 'required',  
            'unit' => 'required',  
        ]);
        
    	$utilities = new Utilities;
    	$utilities->description = request()->description;
        $utilities->category_u = request()->category_u;
        $utilities->quantity = request()->quantity;
        $utilities->unit = request()->unit;
        $utilities->cost = request()->cost;
        $utilities->total = request()->total;
    	$utilities->save();
    	return redirect('/utilities');
    }
    public function update(Utilities $utility)
    {
        $utility->description = request()->description;
        $utility->category_u = request()->category_u;
        $utility->quantity = request()->quantity;
        $utility->unit = request()->unit;
        $utility->cost = request()->cost;
        $utility->total = request()->total;
        $utility->save();
        return redirect('/utilities');
    }
    public function destroy($id) {
      DB::delete('delete from utilities where id = ?',[$id]);
      return redirect('/utilities');
   }
}
