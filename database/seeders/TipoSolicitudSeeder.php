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
    TipoSolicitud::factory()->times(config('seeder.tipo_solicitud'))->create();
  }
}
