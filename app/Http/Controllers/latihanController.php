<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class latihanController extends Controller
{
    //
    public function index(){
        $produk = DB::table('produks')->get();
        return view('produk.vproduk',compact('produk'));
    }
}
