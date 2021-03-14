<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empleado extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'empleado';
  protected $primaryKey = 'idEmpleado';
  protected $fillable = ['idUsuario'];
}
