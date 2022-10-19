<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato37 extends Model
{
    use HasFactory;

    protected $fillable = [
        'CEDULA',
        'PRIMER_NOMBRE',
        'SEGUNDO_NOMBRE',
        'APELLIDO_PATERNO',
        'APELLIDO_MATERNO',
        'FECHA_NACIMIENTO',
        'SEXO',
    ];
}
