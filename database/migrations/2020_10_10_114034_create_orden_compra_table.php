<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
      $table->string('docAsociado', 50);
      $table->foreignId('idTRM')->constrained('trm', 'idTRM');
      $table->double('factorImport');
      $table->foreignId('idEmpleado')->constrained('empleado', 'idEmpleado');
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
    Schema::dropIfExists('orden_compra');
  }
}
