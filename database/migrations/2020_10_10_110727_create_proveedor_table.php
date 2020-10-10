<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('proveedor', function (Blueprint $table) {
      $table->bigIncrements('idProveedor');
      $table->foreignId('tipoDoc')->constrained('tipo_doc', 'idTipoDoc');
      $table->string('numeroDoc');
      $table->string('digitoVerif');
      $table->string('razonSocial');
      $table->string('telefono');
      $table->string('email');
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
    Schema::dropIfExists('proveedor');
  }
}
