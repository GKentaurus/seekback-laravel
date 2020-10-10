<?php

namespace Database\Seeders;

use App\Models\Direcciones;
use Illuminate\Database\Seeder;

class DireccionesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Direcciones::factory()->times(config('seeder.departamento'))->create();
  }
}
