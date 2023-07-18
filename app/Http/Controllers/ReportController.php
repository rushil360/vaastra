<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;
use App\Models\Vehicle;
use App\Models\Inward;
use App\Models\Report;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $data=Report::with('office','vehicle','inward')->where('status',1)->get();
        return view('in_out_summary_report',compact('data'));
    }


    
    public function index2()
    {
        $data=Report::with('office','vehicle','inward')->where('status',0)->get();
        return view('in_out_summary_report_out',compact('data'));
    }

    public function index3($id)
    {
        $data=Report::with('office','vehicle','inward')->where('status',0)->where('office_id->id',$id)->get();
        return view('office_in_out_summary_report',compact('data'));
    }




    public function report()
    {
        return view('report');
    }
}
