<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato_Otra_Depen extends Model
{
    use HasFactory;
    protected $table = 'datos_otra_depen';
    protected $fillable = ['id','dato_general_id','nombre_depen','direccion_depen','horarios',
    'dias_laborales','nombre_jefe','telefono_depen'];
}
