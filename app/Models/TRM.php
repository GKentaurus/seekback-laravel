<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TRM extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'trm';

  protected $fillable = [
    'idDivisa',
    'fechaTRM',
    'tasaCambio',
  ];
}
