<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PQRS extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'pqrs';

  protected $fillable = [
    'idTipoSolicitud',
    'idCliente',
    'idAdministrador',
    'area',
    'comentario',
    'idEstado',
    'fechaRespuesta',
  ];
}
