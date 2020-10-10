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
    'pNombre',
    'sNombres',
    'pApellido',
    'sApellido',
    'tipoDoc',
    'numeroDoc',
    'email',
    'contrasena',
    'telefPpal',
    'rol'
  ];
}
