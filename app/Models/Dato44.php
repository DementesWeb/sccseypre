<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato44 extends Model
{
    use HasFactory;

    protected $fillable = [
        'MINI',
        'PLANILLA',
        'POSICION',
        'CLAVE',
        'AEFEC',
        'EFEC',
        'SALDO',
        'NOMBRE_DESC',
        'ESTATUS',
    ];
}
