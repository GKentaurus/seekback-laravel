<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Direcciones extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'direcciones';

  protected $fillable = [
    'idRegistro',
    'pseudonimo',
    'direccion',
    'telefono',
    'esPrincipal',
    'localizacion',
  ];
}
