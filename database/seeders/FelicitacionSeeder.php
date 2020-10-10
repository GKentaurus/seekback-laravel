<?php

namespace Database\Seeders;

use App\Models\Felicitacion;
use Illuminate\Database\Seeder;

class FelicitacionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Felicitacion::factory()->times(config('seeder.felicitacion'))->create();
  }
}
