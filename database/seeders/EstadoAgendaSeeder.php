<?php

namespace Database\Seeders;

use App\Models\EstadoAgenda;
use Illuminate\Database\Seeder;

class EstadoAgendaSeeder extends Seeder
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
        'Aprobado'
      ],
      [
        'Aplazadp'
      ],
      [
        'Cancelado'
      ],
      [
        'Finalizado'
      ],
    ];

    for ($i = 0; $i < count($estados); $i++) {
      EstadoAgenda::factory()->create($estados[$i]);
    }
  }
}
