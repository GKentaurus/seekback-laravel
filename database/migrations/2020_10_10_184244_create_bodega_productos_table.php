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
      $table->bigInteger('cantidad', 11);
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
    Schema::dropIfExists('bodega_productos');
  }
}
