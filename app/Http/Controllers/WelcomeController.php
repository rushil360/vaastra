<?php

namespace App\Http\Controllers;

use App\Http\Requests\InwardRequest;
use App\Models\Inward;
use App\Models\Office;
use App\Models\Vehicle;
 use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;



class WelcomeController extends Controller
{
    public function index()
    {
        $data=Office::all();
        $recordCount = Inward::where('status',1)->count();
        $inward = Inward::with('office')->select([
            'office_id',
            DB::raw('count(office_id) as occupied')
        ])
        ->where('status',1)
        ->groupBy('office_id')->get();
        return view('welcome',compact('recordCount','data','inward'));
    }


    public function view() 
    {
        $data=Office::all();
        $dataa=Vehicle::all();
        $dattta = DB::table('inward')
            ->where('status', 1)
            ->get();

        return view('inward',compact('data','dataa','dattta'));   
    }

    public function store(InwardRequest $request){

        $inward=new Inward();
        $inward->office_id=$request['office_id'];
        $inward->vehicle_id=$request['vehicle_id'];
        $inward->save();
        return redirect('/inward');
      }

    public function getDetails()
    {
        $fastag = request()->get('fastag');
        $vehicle = Vehicle::where('fastag',$fastag)->first();
        if(!empty($vehicle)){
        return [$vehicle->toArray()];
        }
        return [];
    }

    public function edit($id)
    {
        $inward=Inward::find($id);
        if(is_null($inward)){
            return redirect('/');
        }else{
            DB::table('inward') 
            ->where('id', $id) 
            ->update(['status' => 0]);   
            return redirect('/');
        }
    }


    public function delete($id)
    {
        $office=Office::find($id);
        if(is_null($office)){
            return redirect('office');
    }else{
            DB::table('office')
            ->where('id',$id)
            ->delete();
            return redirect('office');
    }
}

    public function view2() 
    {
        $data=Office::all();
        $dataa=Vehicle::all();
        $dattta = DB::table('inward')
            ->where('status', 1)
            ->get();

        return view('outward',compact('data','dataa','dattta'));   
    }

    public function outward(Request $request)
    {
        // dd($request->all());
        $outward = Inward::where('office_id',$request->get('office_id'))->where('vehicle_id',$request->get('vehicle_id'))->where('status',1)->first();
        if(!empty($outward))
        {
            $update = $outward->update(['status'=>0]);
            return redirect()->back()->with('success','You are out');
        }
        return redirect()->back()->with('error','You are already out');
        
    }

}   