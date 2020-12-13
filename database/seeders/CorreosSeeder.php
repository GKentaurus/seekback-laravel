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
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < 10; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
      }

      if ($usuario->idUsuario > 3) {
        $correoP = [
          'idUsuario' => $usuario->idUsuario,
          'correoElectronico' => "pr_" . $randomString . '@example.com',
          'esPrincipal' => true
        ];

        $correo = [
          'idUsuario' => $usuario->idUsuario,
          'correoElectronico' => $randomString . '@example.com',
          'esPrincipal' => false
        ];

        Correos::factory()->create($correoP);
        Correos::factory()->create($correo);
      }
    }

    Correos::factory()->times(config('seeder.correos'))->create();
  }
}
