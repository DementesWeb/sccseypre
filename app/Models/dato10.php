<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dato10 extends Model
{
    use HasFactory;

    protected $fillable = [
        'NOMBRE',
        'APELLIDOS',
        'CARGO',
        'SALARIO',
        'INICIO_DE_LABORES',
        'OBJETIVO_DE_GASTO',
        'ESTATUS',
    ];

}
