<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('calificacion', function (Blueprint $table) {
      $table->bigIncrements('idCalificacion');
      $table->foreignId('idCliente')->constrained('cliente', 'idCliente');
      $table->foreignId('idProducto')->constrained('producto', 'idProducto');
      $table->tinyInteger('calificacion');
      $table->string('comentario')->nullable();
      $table->boolean('esAprobado');
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
    Schema::dropIfExists('calificacion');
  }
}
