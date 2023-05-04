<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;
use App\Models\User;
use App\Models\Domiciliar;
use App\Http\Requests\RequestDocente;
use App\Models\Academico;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Otra_Dependencia;
use \DB;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados= Estado::all('nombre');
        return view('datosgenerales', compact('estados'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);

    }

    public function storeGenerales(Request $request){
        $general = new General($request->all());
        dd($general);
    }

    
    public function storeDomicilios(Request $request){
        $domiciliar = new Domiciliar($request->all());
        dd($domiciliar);
    }

    public function storeDependencias(Request $request){
        $otra_depen = new Otra_Dependencia($request->all());
        dd($otra_depen);
    }

    public function storeAcademicos(Request $request){
        $academicos = new Academico($request->all());
        dd($academicos);
    }

}
