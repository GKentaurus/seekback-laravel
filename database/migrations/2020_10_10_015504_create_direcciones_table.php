<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('direcciones', function (Blueprint $table) {
      $table->bigIncrements('idDirecciones');
      $table->foreignId('idRegistro')->constrained('usuario', 'idUsuario');
      $table->string('pseudonimo');
      $table->string('dirLinea1');
      $table->string('dirLinea2');
      $table->string('telefono');
      $table->foreignId('localizacion')->constrained('ciudad', 'idCiudad');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('direcciones');
  }
}
