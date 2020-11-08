<?php

namespace Database\Seeders;

use App\Models\TipoServicio;
use Illuminate\Database\Seeder;

class TipoServicioSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $servicios  = [
      [
        'nombreServicio' => 'Aprobado'
      ],
      [
        'nombreServicio' => 'Aplazado'
      ],
    ];

    for ($i = 0; $i < count($servicios); $i++) {
      TipoServicio::factory()->create($servicios[$i]);
    }
  }
}
