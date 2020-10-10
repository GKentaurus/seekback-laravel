<?php

namespace Database\Seeders;

use App\Models\Calificacion;
use Illuminate\Database\Seeder;

class CalificacionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Calificacion::factory()->times(config('seeder.calificacion'))->create();
  }
}
