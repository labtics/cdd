<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\General;

class Academico extends Model
{
    use HasFactory;
    protected $table = 'academicos';
    protected $fillable = ['id','dato_general_id','grado_academico','titulo','cedula','estatus',
    'documentos_t','documento_cu'];

    //Muchos datos academicos tienen un maestro
    public function general(){

        return $this->belongsTo('App\Models\General');

    }
}
