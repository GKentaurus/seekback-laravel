<?php

namespace Database\Seeders;

use App\Models\SoporteTecnico;
use Illuminate\Database\Seeder;

class SoporteTecnicoSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    SoporteTecnico::factory()->times(config('seeder.soporte_tecnico'))->create();
  }
}
