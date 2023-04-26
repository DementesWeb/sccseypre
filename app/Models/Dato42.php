<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato42 extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID',
        'CUENTA',
        'CLIENTE',
        'CEDULA',
        'TEL1',
        'TEL2',
        'EMAIL',
    ];
}
