<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato7 extends Model
{
    use HasFactory;

    protected $filtrable = [
        'cedula',
        'nombre',
        'empresa_1',
        'empresa_2',
        'numero_1',
        'numero_2',
        'salario_neto',
    ];
}
