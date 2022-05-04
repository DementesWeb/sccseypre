<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TIGO_2021 extends Model
{
    use HasFactory;

    protected $fillable = [
        'CEDULA',
        'NOMBRE_CLIENTE',
        'SUSCRIPTOR',
        'BARRIO',
        'CELULAR',
        'TELEFONO',
        'EMAIL',
        'EMAIL_CABLE',
        'SALDOCORRIENTE',
        'SALDO30',
        'SALDO60',
        'SALDO90',
        'SALDO90MAS',
        'ESTADO',
        'DEUDATOTAL',
        'FECHA_ACTUALIZACION'
    ];

}
