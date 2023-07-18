<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\Office;
use Illuminate\Support\Facades\Validator;


class VehicleController extends Controller
{
    public function view()
    {
    //  return Vehicle::with('office')->get();
     $data=Vehicle::with('office')->get();
      return view('/vehicle',compact('data'));
    }  

    public function index() 
    {
      $dataa=Office::all();
      return view('/add_vehicle',compact('dataa'));
    }

    public function store(Request $request){

      $vehicle=new Vehicle();
        $vehicle->office_id=$request['office_id'];
        $vehicle->vehicle_number=$request['vehicle_number'];
      $vehicle->fastag=$request['fastag'];

      $validator = Validator::make($request->all(), [
        'vehicle_number' => 'required|unique:vehicle',      
        'fastag' => 'required|unique:vehicle',
    ]);
    if ($validator->fails()) {
      return redirect()->back()->withErrors($validator)->withInput();
  }
      // Rule::unique('v','office_number');
      $vehicle->save();
      return redirect('/vehicle');
    }


    public function delete($id)
    {
        $vehicle=Vehicle::find($id);
        if(is_null($vehicle)){
            return redirect('vehicle');
    }else{
            DB::table('vehicle')
            ->where('id',$id)
            ->delete();
            return redirect('vehicle');
    }

    }


}