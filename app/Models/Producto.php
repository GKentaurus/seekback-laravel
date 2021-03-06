<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'producto';
  protected $primaryKey = 'idProducto';
  protected $fillable = [
    'modeloProducto',
    'descripcion',
    'precioVenta',
    'idCategoria',
    'estado',
  ];
}
