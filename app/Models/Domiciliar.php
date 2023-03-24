<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\General;

class Domiciliar extends Model
{
    use HasFactory;
    protected $table='domicilios';
    protected $fillable = ['id','user_id','nacionalidad','estado_id','municipio_id',
    'calle','colonia','codigo_postal','num_ex_int'];

    //Un domicilio corresponde a 1 maestro
    public function general(){

        return $this->hasOne('App\Models\General');

    }
}
