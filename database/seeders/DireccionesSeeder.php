<?php

namespace Database\Seeders;

use App\Models\Direcciones;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class DireccionesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $users = Usuario::all($columns = ['idUsuario']);
    foreach ($users as $value) {
      Direcciones::factory()->make([
        'idRegistro' => $value
      ]);

      Direcciones::factory()->make([
        'idRegistro' => $value,
        'esPrincipal' => false
      ]);
    }
  }
}
