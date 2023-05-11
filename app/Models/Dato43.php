<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato43 extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'PLACA',
        'CUPO',
        'MARCA',
        'MODELO',
        'TIPO_VEHICULO',
        'ANO_VEHICULO',
        'MOTOR',
        'TIPO_CAPACIDAD',
        'CAPACIDAD',
        'COLOR',
        'TIPO_COMBUSTIBLE',
        'TIPO_DOC_PROPIETARIO',
        'CIP_PROPIETARIO',
        'NOMBRE_COMPLETO',
        'SEXO',
        'DIRECCION',
        'TEL1',
        'TEL2',
        'TEL3',
        'TEL4',
        'ESTADO',
    ];

}
