<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('cotizacion', function (Blueprint $table) {
      $table->bigIncrements('idCotizacion');
      $table->string('requerimiento');
      $table->date('fecha');
      $table->date('vencimiento');
      $table->foreignId('idTRM')->constrained('trm', 'idTRM');
      $table->foreignId('idEstado')->constrained('estados_cotizacion', 'idEstadoCotizacion');
      $table->foreignId('idEmpleado')->constrained('empleado', 'idEmpleado');
      $table->foreignId('idCliente')->constrained('cliente', 'idCliente');
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
    Schema::dropIfExists('cotizacion');
  }
}
