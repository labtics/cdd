<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Productividad_Academica;
use App\Models\Eventos;

class ProdAcademicaEvento extends Model
{
    use HasFactory;
    protected $table = 'prod_academicas_eventos';
    protected $fillable = ['id','prod_academica_id','evento_id'];

    //una asignatura genereal tiene mucha experencia
    public function productividadacademica(){

        return $this->hasMany('App\Models\Productividad_Academica');

    }

    //...
    public function eventos(){

        return $this->hasMany('App\Models\Eventos');

    }

}
