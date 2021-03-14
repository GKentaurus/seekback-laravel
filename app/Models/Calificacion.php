<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Calificacion extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'calificacion';
  protected $primaryKey = 'idCalificacion';
  protected $fillable = [
    'idCliente',
    'idProducto',
    'calificacion',
    'comentario',
    'esAprobado'
  ];
}
