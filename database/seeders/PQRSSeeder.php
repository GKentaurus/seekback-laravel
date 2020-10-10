<?php

namespace Database\Seeders;

use App\Models\PQRS;
use Illuminate\Database\Seeder;

class PQRSSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    PQRS::factory()->times(config('seeder.pqrs'))->create();
  }
}
