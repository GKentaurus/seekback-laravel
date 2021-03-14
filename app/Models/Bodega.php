<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bodega extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'bodega';
  protected $primaryKey = 'idBodega';
  protected $fillable = [
    'nombreBodega'
  ];
}
