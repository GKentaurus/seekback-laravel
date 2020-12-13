<?php

namespace Database\Seeders;

use App\Models\TipoSolicitud;
use Illuminate\Database\Seeder;

class TipoSolicitudSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $solicitudes = [
      [
        'nombreSolicitud' => 'Petición',
      ],
      [
        'nombreSolicitud' => 'Queja',
      ],
      [
        'nombreSolicitud' => 'Reclamo',
      ],
      [
        'nombreSolicitud' => 'Sugerencia',
      ],
    ];
    TipoSolicitud::factory()->create($solicitudes);
  }
}
