<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstadosFidelizacion extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'estados_fidelizacion';
  protected $primaryKey = 'idEstado';
  protected $fillable = [
    'nombreEstado'
  ];
}
