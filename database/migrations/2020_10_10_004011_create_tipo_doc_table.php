<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoDocTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tipo_doc', function (Blueprint $table) {
      $table->bigIncrements('idTipoDoc');
      $table->string('sigla', 5);
      $table->string('nombreDocumento', 30);
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
    Schema::dropIfExists('tipo_doc');
  }
}
