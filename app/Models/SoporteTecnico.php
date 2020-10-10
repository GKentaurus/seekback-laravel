<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SoporteTecnico extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'soporte_tecnico';

  protected $fillable = [
    'idProducto',
    'idEstado',
  ];
}
