<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorreosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('correos', function (Blueprint $table) {
      $table->bigIncrements('idCorreo');
      $table->foreignId('idUsuario')->constrained('usuario', 'idUsuario');
      $table->string('correoElectronico')->unique();
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
    Schema::dropIfExists('correos');
  }
}
