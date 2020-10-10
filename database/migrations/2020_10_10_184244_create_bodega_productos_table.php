<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodegaProductosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('bodega_productos', function (Blueprint $table) {
      $table->bigIncrements('idRegistro');
      $table->foreignId('idBodega')->constrained('bodega', 'idBodega');
      $table->foreignId('idProducto')->constrained('producto', 'idProducto');
      $table->bigInteger('cantidad');
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
    Schema::dropIfExists('bodega_productos');
  }
}
