<?php

namespace Database\Seeders;

use App\Models\Direcciones;
use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class DireccionesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    for ($i = 1; $i <= Usuario::all()->count(); $i++) {
      $direcciones = [
        [
          'idRegistro' => $i,
          'pseudonimo' => 'Principal',
          'direccion' => random_int(100, 9999) . ' Considine Motorway Suite ' . random_int(100, 999),
          'telefono' => '+57' . random_int(300, 399) . random_int(1111111, 9999999),
          'esPrincipal' => true,
          'localizacion' => random_int(12542, 12856),
        ],
        [
          'idRegistro' => $i,
          'pseudonimo' => 'Principal',
          'direccion' => random_int(100, 9999) . ' Gorczany Manor Suite  ' . random_int(100, 999),
          'telefono' => '+57' . random_int(300, 399) . random_int(1111111, 9999999),
          'esPrincipal' => true,
          'localizacion' => random_int(12542, 12856),
        ],
        [
          'idRegistro' => $i,
          'pseudonimo' => 'Principal',
          'direccion' => random_int(100, 9999) . ' Mueller Prairie Apt.  ' . random_int(100, 999),
          'telefono' => '+57' . random_int(300, 399) . random_int(1111111, 9999999),
          'esPrincipal' => true,
          'localizacion' => random_int(12542, 12856),
        ],
        [
          'idRegistro' => $i,
          'pseudonimo' => 'Principal',
          'direccion' => random_int(100, 9999) . ' Travis Ford Suite  ' . random_int(100, 999),
          'telefono' => '+57' . random_int(300, 399) . random_int(1111111, 9999999),
          'esPrincipal' => true,
          'localizacion' => random_int(12542, 12856),
        ]
      ];

      $selector = random_int(0, 3);
      Direcciones::factory()->create($direcciones[$selector]);
    }

    Direcciones::factory()->times(config('seeder.usuarios'))->create();
  }
}
