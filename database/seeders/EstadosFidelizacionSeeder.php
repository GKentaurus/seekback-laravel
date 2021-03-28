<?php

namespace Database\Seeders;

use App\Models\EstadosFidelizacion;
use Illuminate\Database\Seeder;

class EstadosFidelizacionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $estados = [
      [
        'nombreEstado' => 'Pendiente',
      ],
      [
        'nombreEstado' => 'En revisión',
      ],
      [
        'nombreEstado' => 'Resuelto',
      ],
    ];

    foreach ($estados as $estado) {
      EstadosFidelizacion::factory()->create($estado);
    }

    EstadosFidelizacion::factory()->times(config('seeder.estados_fidelizacion'))->create();
  }
}
