<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
      $table->foreignId('idEstado')->constrained('estados_cotizacion', 'idEstado');
      $table->foreignId('idEmpleado')->constrained('empleado', 'idEmpleado');
      $table->foreignId('idCliente')->constrained('cliente', 'idCliente');
      $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
      $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
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
