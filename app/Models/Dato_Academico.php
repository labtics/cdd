<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato_Academico extends Model
{
    use HasFactory;
    protected $table = 'datos_academicos';
    protected $fillable = ['id','dato_general_id','grado_academico','titulo','cedula','estatus',
    'documentos_t','documento_cu'];
}
