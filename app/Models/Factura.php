<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $table='factura';
    protected $fillable=[
        'nit',
        'total',
        'url',
        'fecha',
        'hora',
        'reserva_id',
    ];

}
