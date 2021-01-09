<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoServicioTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tipo_servicio', function (Blueprint $table) {
      $table->bigIncrements('idTipoServicio');
      $table->string('nombreServicio', 30);
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
    Schema::dropIfExists('tipo_servicio');
  }
}
