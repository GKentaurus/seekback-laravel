<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('calificacion', function (Blueprint $table) {
      $table->bigIncrements('idCalificacion');
      $table->foreignId('idProducto')->constrained('producto', 'idProducto');
      $table->tinyInteger('calificacion');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('calificacion');
  }
}