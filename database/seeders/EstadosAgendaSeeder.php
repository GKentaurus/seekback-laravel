<?php

namespace Database\Seeders;

use App\Models\EstadosAgenda;
use Illuminate\Database\Seeder;

class EstadosAgendaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $estados  = [
      [
        'nombreEstado' => 'Aprobado'
      ],
      [
        'nombreEstado' => 'Aplazado'
      ],
      [
        'nombreEstado' => 'Cancelado'
      ],
      [
        'nombreEstado' => 'Finalizado'
      ],
    ];

    for ($i = 0; $i < count($estados); $i++) {
      EstadosAgenda::factory()->create($estados[$i]);
    }
  }
}
