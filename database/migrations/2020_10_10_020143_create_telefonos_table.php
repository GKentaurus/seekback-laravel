<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefonosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('telefonos', function (Blueprint $table) {
      $table->bigIncrements('idTelefono');
      $table->foreignId('idUsuario')->constrained('usuario', 'idUsuario');
      $table->string('numeroTelefono');
      $table->boolean('esPrincipal');
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
    Schema::dropIfExists('telefonos');
  }
}
