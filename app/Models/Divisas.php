<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Divisas extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'divisas';
  protected $primaryKey = 'idDivisa';
  protected $fillable = [
    'nombre',
    'sigla'
  ];
}
