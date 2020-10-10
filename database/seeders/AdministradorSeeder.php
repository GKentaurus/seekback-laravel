<?php

namespace Database\Seeders;

use App\Models\Administrador;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class AdministradorSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $admins = Usuario::all();

    $admins = $admins->where('rol', 1);

    foreach ($admins as $admin) {
      $form = [
        'idUsuario' => $admin->idUsuario,
      ];
      Administrador::factory()->create($form);
    }
  }
}
