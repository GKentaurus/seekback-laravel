<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Telefonos extends Model
{
  use HasFactory, Notifiable, SoftDeletes;

  protected $table = 'telefonos';

  protected $fillable = [
    'idUsuario',
    'numeroTelefono',
    'esPrincipal'
  ];
}
