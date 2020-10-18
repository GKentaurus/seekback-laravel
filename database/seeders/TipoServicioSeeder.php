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
    $tipos  = [
      [
        'Capacitación'
      ],
      [
        'Asesoría'
      ],
    ];

    for ($i = 0; $i < count($tipos); $i++) {
      TipoServicio::factory()->create($tipos[$i]);
    }
  }
}
