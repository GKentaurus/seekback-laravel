<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoporteTecnicoTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('soporte_tecnico', function (Blueprint $table) {
      $table->bigIncrements('idSoporteTecnico');
      $table->foreignId('idProducto')->constrained('producto', 'idProducto');
      $table->foreignId('idCliente')->constrained('cliente', 'idCliente');
      $table->foreignId('idEmpleado')->constrained('empleado', 'idEmpleado');
      $table->string('comentario');
      $table->foreignId('idEstado')->constrained('estados_fidelizacion', 'idEstado');
      $table->date('fechaRespuesta')->nullable();
      $table->timestamp('created_at');
      $table->timestamp('updated_at');
      $table->boolean('deleted')->default(false);
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
    Schema::dropIfExists('soporte_tecnico');
  }
}
