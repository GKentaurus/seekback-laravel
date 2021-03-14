<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
      $table->string('numeroTelefono', 20);
      $table->boolean('esPrincipal');
      $table->timestamp('created_at');
      $table->timestamp('updated_at');
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
    Schema::dropIfExists('telefonos');
  }
}
