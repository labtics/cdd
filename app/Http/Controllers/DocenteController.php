<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;
use App\Models\User;
use App\Http\Requests\RequestDocente;

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
        //
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

        //corregir base de datos...


    }



}
