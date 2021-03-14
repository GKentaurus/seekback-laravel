<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentoDetallado extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'documento_detallado';
  protected $primaryKey = 'idDetalle';
  protected $fillable = [
    'prefijoDocumento',
    'consecutivo',
    'idProducto',
    'cantidad',
    'valorUnitario',
  ];
}
