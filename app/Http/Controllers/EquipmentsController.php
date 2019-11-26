<?php

namespace App\Http\Controllers;
use DB;
use App\Equipments;
use App\EquipmentsCategory;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    public function index()
    {
    	$equipments = Equipments::all();
        $equipments_category = EquipmentsCategory::all();
    	return view('equipments.index', compact('equipments_category'))->with('equipments', $equipments);
    }
    public function create()
    {   
        $equipments = Equipments::all();
        $equipments_category = EquipmentsCategory::all();
        return view('equipments.index', compact('equipments_category'))->with('equipments', $equipments);
    }
    public function edit(Equipments $equipment){
        $equipments_category = EquipmentsCategory::all();
       return view('equipments.index', compact('equipments_category'))->with('equipments', $equipments);
        //dd($teacher);
    }
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'category' => 'required',  
            'quantity' => 'required',    
        ]);
        
    	$equipments = new Equipments;
    	$equipments->name = request()->name;
        $equipments->category = request()->category;
        $equipments->quantity = request()->quantity;
    	$equipments->save();
    	return redirect('/equipments');
    }
    public function update(Equipments $equipment)
    {
        $equipment->name = request()->name;
        $equipment->category = request()->category;
        $equipment->quantity = request()->quantity;
        $equipment->save();
        return redirect('/equipments');
    }
    public function destroy($id) {
      DB::delete('delete from equipments where id = ?',[$id]);
      return redirect('/equipments');
   }
}
