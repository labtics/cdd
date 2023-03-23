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
    protected $fillable = ['id','user_id','empleado','nombre','apellido_paterno','apellido_materno',
    'sexo','fecha_nacimiento','edad','telefono1','telefono2','estado_civil','categoria','categoria_tipo',
    'rfc','curp','created_at'];

    //Un maestro tiene un usuario
    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
}
