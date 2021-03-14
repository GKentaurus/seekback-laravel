<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFelicitacionTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('felicitacion', function (Blueprint $table) {
      $table->bigIncrements('idFelicitacion');
      $table->foreignId('idCliente')->constrained('cliente', 'idCliente');
      $table->string('dirigidoA', 100);
      $table->string('comentario')->nullable();
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
    Schema::dropIfExists('felicitacion');
  }
}
