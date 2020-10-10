<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $roles = [
      [
        'nombreRol' => 'Administrador',
      ],
      [
        'nombreRol' => 'Empleado',
      ],
      [
        'nombreRol' => 'Cliente',
      ],
    ];

    for ($i = 0; $i < count($roles); $i++) {
      Roles::factory()->create($roles[$i]);
    }

    Roles::factory()->times(config('seeder.roles'))->create();
  }
}
