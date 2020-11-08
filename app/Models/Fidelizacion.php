<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fidelizacion extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'fidelizacion';

  protected $fillable = [
    'idCalificacion',
    'idFelicitacion',
    'idPQRS',
    'idSoporte',
    'fechaInicio',
    'fechaFin',
    'comentario',
    'idCliente',
    'idAdministrador',
    'idEmpleado',
  ];
}
