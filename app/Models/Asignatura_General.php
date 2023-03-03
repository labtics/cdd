<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura_General extends Model
{
    use HasFactory;
    protected $table = 'asignatura_generales';
    protected $fillable = ['id','clave','nombre'];
}
