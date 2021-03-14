<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cotizacion extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'cotizacion';
  protected $primaryKey = 'idCotizacion';
  protected $fillable = [
    'requerimiento',
    'fecha',
    'vencimiento',
    'idTRM',
    'idEstado',
    'idEmpleado',
    'idCliente',
  ];
}
