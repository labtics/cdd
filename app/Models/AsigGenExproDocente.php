<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Asignatura_General;
use App\Models\Expe_Prof_Docente;

class AsigGenExproDocente extends Model
{
    use HasFactory;
    protected $table = 'asig_gen_expro_docentes';
    protected $fillable = ['id','asignatura_general_id','expro_docentes_id'];

    //una asignatura genereal tiene mucha experencia
    public function expeprofdocente(){

        return $this->hasMany('App\Models\Expe_prof_docente');

    }

    //...
    public function asignaturagen(){

        return $this->hasMany('App\Models\Asignatura_General');

    }
    
}
