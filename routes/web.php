<?php

use Illuminate\Support\Facades\Route;

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

Route::get('cdd/iniciosesion', function () {

 
    return view ('iniciosesion');
   
});

Route::get('cdd/principal', function () {

    return view ('principal');
   
});

Route::get('cdd/datosgenerales', function () {

 
    return view ('datosgenerales');
   
});

Route::get('cdd/vista2', function () {

  
    return view ('vista2');
   
});

