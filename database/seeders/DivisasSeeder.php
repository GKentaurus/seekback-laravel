<?php

namespace Database\Seeders;

use App\Models\Divisas;
use Illuminate\Database\Seeder;

class DivisasSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $divisas = [
      [
        'nombre' => 'Peso Colombiano',
        'sigla' => 'COP',
      ],
      [
        'nombre' => 'Dolar Estadounidense',
        'sigla' => 'USD',
      ],
      [
        'nombre' => 'Euro',
        'sigla' => 'EUR',
      ],
    ];

    foreach ($divisas as $divisa) {
      Divisas::factory()->create($divisa);
    }

    Divisas::factory()->times(config('seeder.divisas'))->create();
  }
}
