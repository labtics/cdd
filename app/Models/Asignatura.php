<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Expe_Prof_Docente;

class Asignatura extends Model
{
    use HasFactory;
    protected $table = 'asignatura';
    protected $fillable = ['id','clave','pe','nombre','plan_estudios'];

}
