<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Dato_Domiciliar;
use App\Models\Dato_Otra_Depen;
use App\Models\Dato_Academico;
use App\Models\Productividad_Academica;


class Dato_General extends Model
{
    use HasFactory;
    protected $table='datos_generales';
    protected $fillable = ['id','empleado','nombre','apellido_paterno','apellido_materno',
    'sexo','fecha_nacimiento','edad','telefono','telefono2','estado_civil','categoria_id',
    'rfc','curp','created_at'];

    //Un maestro tiene un domicilio
    public function domicilio(){

        return $this->hasOne('App\Dato_Domiciliar');

    }

    //Un maestro tiene varios trabajos
    public function otradependecia(){

        return $this->belongsTo('App\Dato_Otra_Depen');

    }

    //Un maestro tiene varios datos academicos
    public function academicos(){

        return $this->belongsTo('App\Dato_Academico');

    }

    //Un maestro hace mucha produccion academica
    public function produccionacademica(){

        return $this->belongsTo('App\Productividad_Academica');
    }

    //Un maestro tiende un dato medico
    public function medico(){

        return $this->hasOne('App\Dato_Medico');
    }


}
