<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato1 extends Model
{
    use HasFactory;

    protected $fillable = [
        'CEDULA',
        'NOMBRE',
        'SUSCRIPTOR',
        'CELULAR',
        'TELEFONO',
        'BARRIO',
        'CEDULA_SIN_FORMATO',
        'CUENTA',
        'CUENTA_BARRIO',
        'NOMBRE_CUENTA'
    ];
}
