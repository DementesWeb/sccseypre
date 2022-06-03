<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato8 extends Model
{
    use HasFactory;

    protected $fillable = [
        'CEDULA',
        'NOMBRE',
        'LUGAR_DE_TRABAJO',
        'SALARIO',
    ];
}
