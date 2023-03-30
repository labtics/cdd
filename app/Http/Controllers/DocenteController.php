<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;
use App\Models\User;
use App\Models\Domiciliar;
use App\Http\Requests\RequestDocente;
use App\Models\Estado;
use App\Models\Municipio;

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

    public function getMunicipios(Request $request, $id)
    {
        if($request->ajax())
        {
            $municipios = Municipio::municipios($id);
                return response()->json($municipios);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestDocente $request)
    {

        $general = new General($request->all());
        $empleado = $general->empleado;
        
        $user = User::select('id')->where('empleado', '=' , $empleado)->first();

        $user_id = $user->id; 
        $general->user_id=$user_id;
        $general->saveOrFail();

        $domiciliar = new Domiciliar($request->all());
        $domiciliar->user_id=$user_id;
        $domiciliar->saveOrFail();


    }



}
