<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato17 extends Model
{
    use HasFactory;

    protected $fillable = [
        'NOMBRE_Y_APELLIDO',
        'CARGO',
        'ESTADO',
        'ESC_SALARIAL',
        'ASIGNADO',
        'SALARIO',
    ];

}
