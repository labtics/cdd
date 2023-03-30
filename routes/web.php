<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;

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
    return view ('datosgenerales');
    
});

Route::get('cdd/principal', function () {

  /*  $users = ['juan', 'pedro', 'maria' , 'ana'];-->*/
    return view ('principal');
   
});

Route::get('cdd/datosgenerales', function () {

 
    return view ('datosgenerales');
   
});

 Route ::post('cdd/registrar', [DocenteController::class, 'store'])->name('registrar');
 Route ::get('cdd/datosgenerales',[DocenteController::class, 'create'])->name('inicio');
 Route ::get('cdd/datosgenerales',[DocenteController::class, 'create'])->name('inicio');

