<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatusController extends Controller
{

public function update($id)
{
    DB::table('inward')
        ->where('id', $id)
        ->update(['status' => 0]);
        
    return redirect()->back()->with('success', 'Status updated successfully.');
}

}
