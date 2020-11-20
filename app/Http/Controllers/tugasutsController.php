<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class tugasutsController extends Controller
{
    //
    public function tugasuts(){
        $tugasuts = DB::table('tugasuts')->get();
        return view('tgsuts',compact('tugasuts'));
}

}