<?php

namespace Database\Seeders;

use App\Models\Cotizacion;
use Illuminate\Database\Seeder;

class CotizacionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Cotizacion::factory()->times(config('seeder.cotizacion'))->create();
  }
}
