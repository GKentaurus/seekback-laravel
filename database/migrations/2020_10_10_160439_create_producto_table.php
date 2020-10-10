<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('producto', function (Blueprint $table) {
      $table->bigIncrements('idProducto');
      $table->string('modeloProducto');
      $table->string('descripcion');
      $table->double('precioVenta');
      $table->foreignId('idCategoria')->constrained('categorias_producto', 'idCategoria');
      $table->boolean('estado');
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
    Schema::dropIfExists('producto');
  }
}
