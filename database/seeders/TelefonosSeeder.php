<?php

namespace Database\Seeders;

use App\Models\Usuario;
use App\Models\Telefonos;
use Illuminate\Database\Seeder;

class TelefonosSeeder extends Seeder
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
      Telefonos::factory()->make([
        'idUsuario' => $value
      ]);

      Telefonos::factory()->make([
        'idUsuario' => $value,
        'esPrincipal' => false
      ]);
    }
  }
}
