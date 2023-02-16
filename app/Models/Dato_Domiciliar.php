<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato_Domiciliar extends Model
{
    use HasFactory;
    protected $table='datos_domiciliares';
    protected $fillable = ['id','nacionalidad','estado_id','municipio_id',
    'calle','colonia','codigo_postal','num_ex_int'];
    
}
