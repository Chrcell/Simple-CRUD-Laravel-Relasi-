<?php
use App\Http\Controllers\barangcontroller;
use App\Http\Controllers\jeniscontroller;
use Illuminate\Support\Facades\Route;

route::get('/', function(){
    return view('welcome');
});
Route::resource('barang', \App\Http\Controllers\barangcontroller::class);
Route::resource('jenis', \App\Http\Controllers\jeniscontroller::class);
