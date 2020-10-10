<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
      $table->foreignId('idEstado')->constrained('estados_fidelizacion', 'idEstado');
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
    Schema::dropIfExists('soporte_tecnico');
  }
}
