<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
      $table->string('modeloProducto', 100);
      $table->string('descripcion', 255);
      $table->double('precioVenta', 11);
      $table->foreignId('idCategoria')->constrained('categorias_producto', 'idCategoria');
      $table->boolean('estado');
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
    Schema::dropIfExists('producto');
  }
}
