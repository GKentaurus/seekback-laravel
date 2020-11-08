<?php

namespace Database\Seeders;

use App\Models\Pais;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::unprepared(file_get_contents('database/migrations/pais.sql'));
    // Pais::factory()->times(config('seeder.pais'))->create();
  }
}
