<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoServicio extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'tipo_servicio';
  protected $primaryKey = 'idTipoServicio';
  protected $fillable = [
    'nombreServicio'
  ];
}
