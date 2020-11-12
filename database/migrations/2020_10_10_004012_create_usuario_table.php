<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('usuario', function (Blueprint $table) {
      $table->bigIncrements('idUsuario');
      $table->string('pNombre', 50);
      $table->string('sNombres', 50)->nullable();
      $table->string('pApellido', 50);
      $table->string('sApellido', 50)->nullable();
      $table->foreignId('tipoDoc')->constrained('tipo_doc', 'idTipoDoc');
      $table->string('numeroDoc', 50);
      $table->string('contrasena');
      $table->foreignId('rol')->constrained('roles', 'idRol');
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
    Schema::dropIfExists('usuario');
  }
}
