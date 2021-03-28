<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePQRSTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('pqrs', function (Blueprint $table) {
      $table->bigIncrements('idPQRS');
      $table->foreignId('idTipoSolicitud')->constrained('tipo_solicitud', 'idTipoSolicitud');
      $table->foreignId('idCliente')->constrained('usuario', 'idUsuario');
      $table->foreignId('idAdministrador')->constrained('usuario', 'idUsuario');
      $table->string('area', 100);
      $table->text('comentario');
      $table->text('respuesta')->nullable();
      $table->foreignId('idEstado')->constrained('estados_fidelizacion', 'idEstado');
      $table->date('fechaRespuesta')->nullable();
      $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
      $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
      $table->boolean('deleted')->default(false);
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   *-
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('pqrs');
  }
}
