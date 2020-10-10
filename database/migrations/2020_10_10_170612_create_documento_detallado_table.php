<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoDetalladoTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('documento_detallado', function (Blueprint $table) {
      $table->bigIncrements('idDetalle');
      $table->string('prefijoDocumento');
      $table->bigInteger('consecutivo');
      $table->foreignId('idProducto')->constrained('producto', 'idProducto');
      $table->bigInteger('cantidad');
      $table->double('valorUnitario');
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
    Schema::dropIfExists('documento_detallado');
  }
}
