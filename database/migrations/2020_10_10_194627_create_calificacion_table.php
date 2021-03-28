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
      $table->foreignId('idCliente')->constrained('usuario', 'idUsuario');
      $table->foreignId('idProducto')->constrained('producto', 'idProducto');
      $table->tinyInteger('calificacion');
      $table->text('comentario')->nullable();
      $table->boolean('esAprobado');
      $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
      $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
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
