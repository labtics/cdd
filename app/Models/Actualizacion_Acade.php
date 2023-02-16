<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualizacion_Acade extends Model
{
    use HasFactory;
    protected $table = 'actualizacion_acade';
    protected $fillable = ['id','evento','nombre_even','fecha_even','institucion_a'];
}
