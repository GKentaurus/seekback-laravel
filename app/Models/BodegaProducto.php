<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BodegaProducto extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = "bodega_productos";
  protected $primaryKey = 'idRegistro';
  protected $fillable = [
    'idBodega',
    'idProducto',
    'cantidad',
  ];
}
