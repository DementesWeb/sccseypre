<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato21 extends Model
{
    use HasFactory;

    protected $fillable = [
        'CONDICION_DEL_NOMBRAMIENTO',
        'SEXO',
        'APELLIDO_PATERNO',
        'APELLIDO_MATERNO',
        'APELLIDO_DE_CASADA',
        'PRIMER_NOMBRE',
        'SEGUNDO_NOMBRE',
        'CEDULA',
        'CARGO_REAL',
        'GASTO_DE_REPRESENTACION',
        'SALARIO_SEGUN_PLANILLA',
        'AREA',
        'FECHA_DE_INICIO',
    ];

}
