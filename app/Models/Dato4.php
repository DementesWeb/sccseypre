<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato4 extends Model
{
    use HasFactory;

    protected $fillable = [
        'CEDULA',
        'P_NOMBRE',
        'S_NOMBRE',
        'PATERNO',
        'MATERNO',
        'CASADA',
        'SEXO',
        'TEELFONO',
        'FECHA NACIMIENTO',
    ];
}
