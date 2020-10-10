<?php

namespace Database\Seeders;

use App\Models\TRM;
use Illuminate\Database\Seeder;

class TRMSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    TRM::factory()->times(config('seeder.trm'))->create();
  }
}
