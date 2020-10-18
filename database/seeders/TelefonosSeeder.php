<?php

namespace Database\Seeders;

use App\Models\Telefonos;
use Illuminate\Database\Seeder;

class TelefonosSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Telefonos::factory()->times(config('seeder.telefonos'))->create();
  }
}
