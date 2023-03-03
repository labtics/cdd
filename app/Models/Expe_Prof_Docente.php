<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Asignatura;
use App\Models\Asignatura_General;
use App\Models\General;

class Expe_Prof_Docente extends Model
{
    use HasFactory;
    protected $table = 'expe_prof_docente';
    protected $fillable = ['id','dato_general_id','programa_edu','id_asignatura','id_asignatura_g','ciclo_escolar','reconocimiento',
    'cuerpo_aca','Grupo_aca'];

    //muchas asignaturas tienen muchos maestros
    public function asignatura(){

        return $this->belongsToMany('App\Models\Asignatura');

    }

    //muchas asignaturas tienen muchos maestros
    public function asignatura_general(){

        return $this->belongsToMany('App\Models\Asignatura_General');

    }

    //muchas asignaras tienen un maestros
    public function general(){

        return $this->belongsToMany('App\Models\General');

    }
}
