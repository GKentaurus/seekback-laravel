<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoriasProducto extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'categorias_producto';
  protected $primaryKey = 'idCategoria';
  protected $fillable = ['nombreCategoria', 'faIcon'];
}
