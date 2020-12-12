<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = "usuario";

  protected $fillable = [
    'primerNombre',
    'otrosNombres',
    'primerApellido',
    'otrosApellidos',
    'tipoDoc',
    'numeroDoc',
    'contrasena',
    'salt',
    'rol',
  ];
}
