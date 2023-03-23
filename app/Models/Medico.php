<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\General;

class Medico extends Model
{
    use HasFactory;
    protected $table = 'medicos';
    protected $fillable = ['id','nss','alergias','patologias','tipo_sangre','contacto_emergencia','telefono'];

    //Un dato medico tiene un maestro
    public function general(){

        return $this->hasOne('App\Models\General');

    }
}
