<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
      $table->string('correoElectronico', 255)->unique();
      $table->boolean('esPrincipal');
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
    Schema::dropIfExists('correos');
  }
}
