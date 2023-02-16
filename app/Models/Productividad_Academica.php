<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productividad_Academica extends Model
{
    use HasFactory;
    protected $table = 'productividad_acade';
    protected $fillable = ['id','Evento_p','Nombre_eventoP','Fecha_eventoP','Fecha_evento','institucion'];

}
