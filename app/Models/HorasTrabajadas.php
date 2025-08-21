<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HorasTrabajadas extends Model
{
    protected $table = 'RegistroHoras'; 
    protected $fillable = [
        'user_id',
        'fecha',
        'horas',
        'descripcion'
    ];

    public $timestamps = false; 
}
