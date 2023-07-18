<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class OfficeController extends Controller
{
    public function store(Request $request){

    $office=new Office;
    $office->office_name=$request['office_name'];
    $office->office_number=$request['office_number'];
    $office->v_allowed=$request['v_allowed'];
    $validator = Validator::make($request->all(), [
      'office_number' => 'required|numeric|unique:office',
      'office_name'=>'required',
      'v_allowed'=>'required|numeric',
  ]);
  if ($validator->fails()) {
   return redirect()->back()->withErrors($validator)->withInput();
   }
    Rule::unique('inward','office_number');
    $office->save();
    return redirect('/office');
   }
    public function view()   
   {
      $offices=Office::all();
      $data=compact('offices');
      return view('office')->with($data);
   }
    public function index()
   {
      return view('add_office');
   }
    public function updateStatus(Request $request, $id)
   {
    $status = $request->input('status');

    // Update the status in the database for the given office ID

    return response()->json(['success' => true]);
   }
}