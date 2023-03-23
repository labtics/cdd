<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otra_Dependencia extends Model
{
    use HasFactory;
    protected $table = 'otras_dependencias';
    protected $fillable = ['id','dato_general_id','nombre_depen','direccion_depen','horarios',
    'dias_laborales','nombre_jefe','telefono_depen'];

    //Varios trabajos tienen un maestro
    public function general(){

        return $this->belongsTo('App\Models\General');

    }
}
