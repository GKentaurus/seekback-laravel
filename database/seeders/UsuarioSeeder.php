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
        'pNombre' => 'Veronica',
        'sNombres' => 'Maria',
        'pApellido' => 'Ortiz',
        'sApellido' => 'Rocha',
        'tipoDoc' => 1,
        'numeroDoc' => '1019111222',
        'email' => 'veronica@example.com',
        'contrasena' => '123456',
        'telefPpal' => '3001112233',
        'rol' => 1,
      ],
      [
        'pNombre' => 'Danniela',
        'sNombres' => 'Maria',
        'pApellido' => 'Riaño',
        'sApellido' => 'Huertas',
        'tipoDoc' => 1,
        'numeroDoc' => '1020111222',
        'email' => 'danniela@example.com',
        'contrasena' => '123456',
        'telefPpal' => '3001113344',
        'rol' => 1,
      ],
      [
        'pNombre' => 'Carlos',
        'sNombres' => 'Alberto',
        'pApellido' => 'Moreno',
        'sApellido' => 'Cifuentes',
        'tipoDoc' => 1,
        'numeroDoc' => '1021111222',
        'email' => 'carlos@example.com',
        'contrasena' => '123456',
        'telefPpal' => '3001114455',
        'rol' => 1,
      ],
    ];

    for ($i = 0; $i < count($users); $i++) {
      Usuario::factory()->create($users[$i]);
    }

    Usuario::factory()->times(config('seeder.usuarios'))->create();
  }
}
