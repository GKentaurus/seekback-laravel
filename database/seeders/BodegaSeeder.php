<?php

namespace Database\Seeders;

use App\Models\Bodega;
use Illuminate\Database\Seeder;

class BodegaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $bodegas = [
      [
        'nombreBodega' => 'Principal',
      ],
    ];

    foreach ($bodegas as $bodega) {
      Bodega::factory()->create($bodega);
    }

    Bodega::factory()->times(config('seeder.bodega'))->create();
  }
}
