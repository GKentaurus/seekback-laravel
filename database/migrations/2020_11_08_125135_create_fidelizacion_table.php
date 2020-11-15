<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFidelizacionTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('fidelizacion', function (Blueprint $table) {
      $table->bigIncrements('idFidelizacion');
      $table->foreignId('idCalificacion')->nullable()->constrained('calificacion', 'idCalificacion');
      $table->foreignId('idFelicitacion')->nullable()->constrained('felicitacion', 'idFelicitacion');
      $table->foreignId('idPQRS')->nullable()->constrained('pqrs', 'idPQRS');
      $table->foreignId('idSoporte')->nullable()->constrained('soporte_tecnico', 'idSoporteTecnico');
      $table->date('fechaInicio');
      $table->date('fechaFin');
      $table->string('comentario', 255);
      $table->foreignId('idCliente')->constrained('cliente', 'idCliente');
      $table->foreignId('idAdministrador')->nullable()->constrained('administrador', 'idAdministrador');
      $table->foreignId('idEmpleado')->nullable()->constrained('empleado', 'idEmpleado');
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
    Schema::dropIfExists('fidelizacion');
  }
}
