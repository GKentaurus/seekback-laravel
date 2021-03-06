<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('ciudad', function (Blueprint $table) {
      $table->bigIncrements('idCiudad');
      $table->foreignId('idDepartamento')->constrained('departamento', 'idDepartamento');
      $table->string('nombreCiudad', 50);
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
    Schema::dropIfExists('ciudad');
  }
}
