<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\General;

class Domicilio extends Model
{
    use HasFactory;
    protected $table='domicilios';
    protected $fillable = ['id','nacionalidad','estado_id','municipio_id',
    'calle','colonia','codigo_postal','num_ex_int'];

    //Un domicilio corresponde a 1 maestro
    public function general(){

        return $this->hasOne('App\Models\General');

    }
}
