<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $clientes = Usuario::all();

    $clientes = $clientes->where('rol', 3);

    foreach ($clientes as $cliente) {
      $form = [
        'idUsuario' => $cliente->idUsuario,
      ];
      Cliente::factory()->create($form);
    }
  }
}
