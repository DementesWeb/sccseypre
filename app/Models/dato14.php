<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dato14 extends Model
{
    use HasFactory;

    protected $fillable = [
        'APELLIDO',
        'NOMBRE',
        'CEDULA',
        'CARGO',
        'SALARIO',
        'GASTO_DE_REPRESENTACIO',
        'TOTAL',
    ];
}
