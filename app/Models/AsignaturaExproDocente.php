<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Asignatura;
use App\Models\Expe_Prof_Docente;

class AsignaturaExproDocente extends Model
{
    use HasFactory;
    protected $table = 'asignaturas_expro_docentes';
    protected $fillable = ['id','asignatura_id','expro_docentes_id'];

    //una asignatura tiene mucha experencia
    public function expeprofdocente(){

        return $this->hasMany('App\Models\Expe_prof_docente');

    }

    //...
    public function asignatura(){

        return $this->hasMany('App\Models\Asignatura');

    }

}
