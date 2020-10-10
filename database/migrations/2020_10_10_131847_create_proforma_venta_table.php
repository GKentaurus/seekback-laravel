<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
      $table->foreignId('cotizacionAsociada')->constrained('cotizacion', 'idCotizacion');
      $table->date('fecha');
      $table->date('vencimiento');
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
    Schema::dropIfExists('proforma_venta');
  }
}
