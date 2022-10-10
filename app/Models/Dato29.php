<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato29 extends Model
{
    use HasFactory;

    protected $fillable =[
        'NOMBRE',
        'APELLIDO',
        'CEDULA',
        'CARGO',
        'UNIDAD',
        'SALARIO',
        'ANTIGUEDAD',
        'OBJETOGASTO',
        'FECHAINGRESO',
        'ESTATUS',
        'TOTAL',
    ];


}
