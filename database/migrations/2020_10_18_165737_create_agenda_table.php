<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendaTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('agenda', function (Blueprint $table) {
      $table->bigIncrements('idAgenda');
      $table->date('fecha');
      $table->string('observaciones', 255);
      $table->foreignId('idEstado')->constrained('estados_agenda', 'idEstado');
      $table->foreignId('idTipoServicio')->constrained('tipo_servicio', 'idTipoServicio');
      $table->foreignId('idCliente')->nullable()->constrained('cliente', 'idCliente');
      $table->foreignId('idEmpleado')->nullable()->constrained('empleado', 'idEmpleado');
      $table->foreignId('idAdministrador')->nullable()->constrained('administrador', 'idAdministrador');
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
    Schema::dropIfExists('agenda');
  }
}
