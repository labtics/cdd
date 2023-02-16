<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expe_Prof_Docente extends Model
{
    use HasFactory;
    protected $table = 'expe_prof_docente';
    protected $fillable = ['id','dato_general_id','programa_edu','id_asignatura','id_asignatura_g','ciclo_escolar','reconocimiento',
    'cuerpo_aca','Grupo_aca'];
}
