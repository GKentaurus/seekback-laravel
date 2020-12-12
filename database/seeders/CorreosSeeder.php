<?php

namespace Database\Seeders;

use App\Models\Correos;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class CorreosSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $correos = [
      [
        'idUsuario' => 1,
        'correoElectronico' => 'veronica@example.org',
        'esPrincipal' => true,
      ],
      [
        'idUsuario' => 2,
        'correoElectronico' => 'danniela@example.org',
        'esPrincipal' => true,
      ],
      [
        'idUsuario' => 3,
        'correoElectronico' => 'carlos@example.org',
        'esPrincipal' => true,
      ],
    ];

    for ($i = 0; $i < count($correos); $i++) {
      Correos::factory()->create($correos[$i]);
    }

    $usuarios = Usuario::all();

    foreach ($usuarios as $usuario) {
      if ($usuario->idUsuario > 3) {
        $correoP = [
          'idUsuario' => $usuario->idUsuario,
          'correoElectronico' => "pr_" . $usuario->pNombre . $usuario->pApellido . $usuario->idUsuario . '@example.com',
          'esPrincipal' => 0
        ];

        $correo = [
          'idUsuario' => $usuario->idUsuario,
          'correoElectronico' => $usuario->pNombre . $usuario->pApellido . $usuario->idUsuario . '@example.com',
          'esPrincipal' => 0
        ];

        Correos::factory()->create($correoP);
        Correos::factory()->create($correo);
      }
    }

    Correos::factory()->times(config('seeder.correos'))->create();
  }
}
