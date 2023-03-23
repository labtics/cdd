<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Diplomado extends Model
{
    use HasFactory;
    protected $table = 'tipo_diplomado';
    protected $fillable = ['id','tipo_diplomado'];
}
