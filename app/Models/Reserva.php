<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';


    protected $fillable = [
        'fecha',
        'usuario',
        'habitacion',
        'estado',
        'fecha_inicio',
        'fecha_fin',
        'observaciones',
    ];


}
