<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProformaVentaTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('proforma_venta', function (Blueprint $table) {
      $table->bigIncrements('idProforma');
      $table->foreignId('idCotizacion')->constrained('cotizacion', 'idCotizacion');
      $table->date('fecha');
      $table->date('vencimiento');
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
    Schema::dropIfExists('proforma_venta');
  }
}
