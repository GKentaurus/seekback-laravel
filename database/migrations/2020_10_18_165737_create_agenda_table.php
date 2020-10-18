<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('agenda', function (Blueprint $table) {
      $table->bigIncrements('idAgenda');
      $table->date('fecha');
      $table->string('observaciones');
      $table->foreignId('idEstado')->constrained('estado_agenda', 'idEstado');
      $table->foreignId('idTipoServicio')->constrained('tipo_servicio', 'idTipoServicio');
      $table->foreignId('idCliente')->constrained('cliente', 'idCliente');
      $table->foreignId('idEmpleado')->constrained('empleado', 'idEmpleado');
      $table->foreignId('idAdministrador')->constrained('administrador', 'idAdministrador');
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
    Schema::dropIfExists('agenda');
  }
}
