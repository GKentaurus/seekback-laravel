<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
      $table->string('prefijoDocumento', 10);
      $table->bigInteger('consecutivo');
      $table->foreignId('idProducto')->constrained('producto', 'idProducto');
      $table->bigInteger('cantidad');
      $table->double('valorUnitario');  // TODO Revisar limite de datos Double
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
    Schema::dropIfExists('documento_detallado');
  }
}
