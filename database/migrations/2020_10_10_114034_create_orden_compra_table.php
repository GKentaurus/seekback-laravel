<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenCompraTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('orden_compra', function (Blueprint $table) {
      $table->bigIncrements('idOrdenCompra');
      $table->foreignId('idProveedor')->constrained('proveedor', 'idProveedor');
      $table->date('fecha');
      $table->string('docAsociado');
      $table->foreignId('idTRM')->constrained('trm', 'idTRM');
      $table->double('factorImport');
      $table->foreignId('idEmpleado')->constrained('empleado', 'idEmpleado');
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
    Schema::dropIfExists('orden_compra');
  }
}
