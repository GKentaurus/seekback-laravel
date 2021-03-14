<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrdenCompra extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'orden_compra';
  protected $primaryKey = 'idOrdenCompra';
  protected $fillable = [
    'idProveedor',
    'fecha',
    'docAsociado',
    'idTRM',
    'factorImport',
    'idEmpleado',
  ];
}
