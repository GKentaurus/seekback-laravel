<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $users = [
      [
        'primerNombre' => 'Veronica',
        'otrosNombres' => 'Maria',
        'primerApellido' => 'Ortiz',
        'otrosApellidos' => 'Rocha',
        'tipoDoc' => 1,
        'numeroDoc' => '1019111222',
        'contrasena' => '123',
        'salt' => 'clave',
        'rol' => 1,
      ],
      [
        'primerNombre' => 'Danniela',
        'otrosNombres' => 'Maria',
        'primerApellido' => 'Riaño',
        'otrosApellidos' => 'Huertas',
        'tipoDoc' => 1,
        'numeroDoc' => '1020111222',
        'contrasena' => '456',
        'salt' => 'clave',
        'rol' => 2,
      ],
      [
        'primerNombre' => 'Carlos',
        'otrosNombres' => 'Alberto',
        'primerApellido' => 'Moreno',
        'otrosApellidos' => 'Cifuentes',
        'tipoDoc' => 1,
        'numeroDoc' => '1021111222',
        'contrasena' => '789',
        'salt' => 'clave',
        'rol' => 3,
      ],
    ];

    for ($i = 0; $i < count($users); $i++) {
      Usuario::factory()->create($users[$i]);
    }

    Usuario::factory()->times(config('seeder.usuarios'))->create();
  }
}
