<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiudadTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('ciudad', function (Blueprint $table) {
      $table->bigIncrements('idCiudad');
      $table->foreignId('idDepartamento')->constrained('departamento', 'idDepartamento');
      $table->string('nombreCiudad');
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
    Schema::dropIfExists('ciudad');
  }
}
