<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato_Medico extends Model
{
    use HasFactory;
    protected $table = 'datos_medicos';
    protected $fillable = ['id','nss','alergias','patologias','tipo_sangre','contacto_emergencia','telefono'];
}
