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
    for ($i = 1; $i <= Usuario::all()->count(); $i++) {
      $telefonos = [

        'idUsuario' => $i,
        'numeroTelefono' => '+57' . random_int(300, 399) . random_int(1111111, 9999999),
        'esPrincipal' => true,

      ];
      Telefonos::factory()->create($telefonos);
    }

    Telefonos::factory()->times(config('seeder.usuarios'))->create();
  }
}
