<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
    Schema::dropIfExists('bodega_productos');
  }
}
