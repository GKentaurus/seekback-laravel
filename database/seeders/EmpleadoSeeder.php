<?php

namespace Database\Seeders;

use App\Models\Usuario;
use App\Models\Empleado;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $empleados = Usuario::all();

    $empleados = $empleados->where('rol', 2);

    foreach ($empleados as $empleado) {
      $form = [
        'idUsuario' => $empleado->idUsuario,
      ];
      Empleado::factory()->create($form);
    }
  }
}
