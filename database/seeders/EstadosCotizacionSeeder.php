<?php

namespace Database\Seeders;

use App\Models\EstadosCotizacion;
use Illuminate\Database\Seeder;

class EstadosCotizacionSeeder extends Seeder
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
        'nombreEstado' => 'Pendiente'
      ],
      [
        'nombreEstado' => 'Aprobado'
      ],
      [
        'nombreEstado' => 'Rechazado'
      ],
    ];

    foreach ($estados as $estado) {
      EstadosCotizacion::factory()->create($estado);
    }
  }
}
