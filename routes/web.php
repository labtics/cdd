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

  /*  $users = ['juan', 'pedro', 'maria' , 'ana'];-->*/
    return view ('iniciosesion');
   
});

Route::get('cdd/principal', function () {

  /*  $users = ['juan', 'pedro', 'maria' , 'ana'];-->*/
    return view ('principal');
   
});

Route::get('cdd/datosgenerales', function () {

  /*  $users = ['juan', 'pedro', 'maria' , 'ana'];-->*/
    return view ('datosgenerales');
   
});

Route::get('cdd/vista2', function () {

  /*  $users = ['juan', 'pedro', 'maria' , 'ana'];-->*/
    return view ('vista2');
   
});
