<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato3 extends Model
{
    use HasFactory;

    protected $fillable = [
        'CEDULA',
        'PRIMER_NOMBRE',
        'SEGUNDO_NOMBRE',
        'APELLIDO_PATERNO',
        'APELLIDO_MATERNO',
        'APELLIDO_CASADA',
        'FECHA_NACIMIENTO',
        'SEXO',
        'EDAD',
        'TELEFONO_RES',
    ];
}
