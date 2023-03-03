<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Domicilio;
use App\Models\Otra_Dependencia;
use App\Models\Academico;
use App\Models\Prod_Academica;
use App\Models\Medico;
use App\Models\Expe_Prof_Docente;

class General extends Model
{
    use HasFactory;
    protected $table='generales';
    protected $fillable = ['id','empleado','nombre','apellido_paterno','apellido_materno',
    'sexo','fecha_nacimiento','edad','telefono','telefono2','estado_civil','categoria_id',
    'rfc','curp','created_at'];

    //Un maestro tiene un domicilio
    public function domicilio(){

        return $this->hasOne('App\Models\Domicilio');

    }

    //Un maestro tiene varios trabajos
    public function otras_dependecias(){

        return $this->hasMany('App\Models\Otra_Dependencia');

    }

    //Un maestro tiene varios datos academicos
    public function academicos(){

        return $this->hasMany('App\Models\Academico');

    }

    //Un maestro hace mucha produccion academica
    public function prod_academicas(){

        return $this->hasMany('App\Models\Prod_Academica');
    }

    //Un maestro tiende un dato medico
    public function medico(){

        return $this->hasOne('App\Models\Medico');
    }

    //Un maestro tiene mucha experiencia
    public function expe_prof_academica(){

        return $this->hasMany('App\Models\Expe_Prof_Depen');

    }
}
