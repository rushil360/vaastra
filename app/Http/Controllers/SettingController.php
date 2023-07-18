<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function index()
    {
        return view('setting');
    }


    public function index2()
    {
        $data=Setting::all();
        return view('total_cap',compact('data'));   
    }



    
    // public function store(Request $request){

    //     $setting=new Setting();
    //     $setting->total_cap=$request['total_cap'];
    //     $setting->save();
    //     return redirect('/');
    //   }
      public function store($id,Request $request)
      {
        $setting=Setting::find($id);
        $setting->total_cap=$request['total_cap'];
        $setting->save();
        
      }

      public function view()
      {
        $data=Setting::all();
        return view ('/cap_view',compact('data'));
      }
}