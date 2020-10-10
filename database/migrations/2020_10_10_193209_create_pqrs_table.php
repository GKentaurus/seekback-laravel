<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePQRSTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('pqrs', function (Blueprint $table) {
      $table->bigIncrements('idPQRS');
      $table->foreignId('idTipoSolicitud')->constrained('tipo_solicitud', 'idTipoSolicitud');
      $table->string('area');
      $table->foreignId('idEstado')->constrained('estados_fidelizacion', 'idEstado');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   *-
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('pqrs');
  }
}
