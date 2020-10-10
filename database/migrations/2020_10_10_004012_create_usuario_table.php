<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
      $table->string('pNombre');
      $table->string('sNombres');
      $table->string('pApellido');
      $table->string('sApellido');
      $table->foreignId('tipoDoc')->constrained('tipo_doc', 'idTipoDoc');
      $table->string('numeroDoc');
      $table->string('email');
      $table->string('contrasena');
      $table->string('telefPpal');
      $table->foreignId('rol')->constrained('roles', 'idRol');
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
    Schema::dropIfExists('usuario');
  }
}
