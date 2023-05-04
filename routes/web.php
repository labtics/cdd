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
Route::view('cdd/docente/tablero', 'docente-tablero');

Route::view('cdd/docente/generales', 'docente-generales');
Route ::post('cdd/docente/generales/store', [DocenteController::class, 'storeGenerales'])->name('docente.storeGenerales');

Route::view('cdd/docente/domicilio', 'docente-domicilio');
Route ::post('cdd/docente/domicilio/store', [DocenteController::class, 'storeDomicilios'])->name('docente.storeDomicilios');

Route::view('cdd/docente/dependencia', 'docente-dependencia');
Route ::post('cdd/docente/dependencia/store', [DocenteController::class, 'storeDependencias'])->name('docente.storeDependencias');

