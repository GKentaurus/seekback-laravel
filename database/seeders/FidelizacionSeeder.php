<?php

namespace Database\Seeders;

use App\Models\Fidelizacion;
use Illuminate\Database\Seeder;

class FidelizacionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Fidelizacion::factory()->times(config('seeder.fidelizacion'))->create();
  }
}
