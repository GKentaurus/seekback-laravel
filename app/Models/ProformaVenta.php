<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProformaVenta extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'proforma_venta';

  protected $fillable = [
    'cotizacionAsociada',
    'fecha',
    'vencimiento',
  ];
}
