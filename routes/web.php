<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about',function(){
    echo "Ini Merupakan Sebuah page (page about)";
})->name("tentang");

Route::get('/produk','produkController@index');

Route::get('/show/{id?}', function($id=1){
    echo "Parameter ID: " .  $id;
})->where('id','[0-9]+');

Route::get('/utama', function(){        
    echo "ini page utama";
    echo "<br>";
    echo "<a href='".route('tentang').">About</a>";
});

Route::get('/produk/showproduk','produkcontroller@showproduk');

Route::get('/produks','latihanController@index');

Route::get('/tugasuts','tugasutsController@tugasuts');