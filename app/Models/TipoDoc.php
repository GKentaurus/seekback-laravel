<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoDoc extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'tipo_doc';
  protected $primaryKey = 'idTipoDoc';
  protected $fillable = [
    'sigla',
    'nombreDocumento',
  ];
}
