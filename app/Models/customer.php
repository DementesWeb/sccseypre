<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_y_apellido',
        'cedula',
        'cargo',
        'sueldo',
        'sobresueldo',
        'sueldo_neto',
        '35_porciento',
        '25_porciento',
        '20_porciento',
        'COD_1',
        'DES_1',
        'FEC_1',
        'COD_2',
        'DES_2',
        'FEC_2',
        'COD_3',
        'DES_3',
        'FEC_3',
        'COD_4',
        'DES_4',
        'FEC_4',
        'COD_5',
        'DES_5',
        'FEC_5',
        'COD_6',
        'DES_6',
        'FEC_6',
        'COD_7',
        'DES_7',
        'FEC_7',
        'COD_8',
        'DES_8',
        'FEC_8',
        'COD_9',
        'DES_9',
        'FEC_9',
        'COD_10',
        'DES_10',
        'FEC_10',
        'COD_11',
        'DES_11',
        'FEC_11',
        'COD_12',
        'DES_12',
        'FEC_12'
    ];
}
