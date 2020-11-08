<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('direcciones', function (Blueprint $table) {
      $table->bigIncrements('idDirecciones');
      $table->foreignId('idRegistro')->constrained('usuario', 'idUsuario');
      $table->string('pseudonimo');
      $table->string('direccion');
      $table->string('telefono');
      $table->foreignId('localizacion')->constrained('ciudad', 'idCiudad');
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
    Schema::dropIfExists('direcciones');
  }
}
