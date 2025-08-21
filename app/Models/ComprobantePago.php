<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComprobantePago extends Model
{
    protected $table = 'comprobantes_pagos';
    protected $fillable = [
        'user_id',
        'monto',
        'fecha_pago',
        'archivo'
    ];

    public $timestamps = false;
}
