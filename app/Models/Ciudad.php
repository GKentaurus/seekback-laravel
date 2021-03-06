<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ciudad extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'ciudad';
  protected $primaryKey = 'idCiudad';
  protected $fillable = [
    'idDepartamento',
    'nombreCiudad',
  ];
}
