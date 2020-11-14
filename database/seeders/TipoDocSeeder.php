<?php

namespace Database\Seeders;

use App\Models\TipoDoc;
use Illuminate\Database\Seeder;

class TipoDocSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $documents = [
      [
        'sigla' => 'C.C.',
        'nombreDocumento' => 'Cédula de Ciudadanía',
      ],
      [
        'sigla' => 'C.E.',
        'nombreDocumento' => 'Cédula de Extranjería',
      ],
      [
        'sigla' => 'NIT',
        'nombreDocumento' => 'NIT',
      ],
      [
        'sigla' => 'PASS',
        'nombreDocumento' => 'Pasaporte',
      ],
    ];

    for ($i = 0; $i < count($documents); $i++) {
      tipoDoc::factory()->create($documents[$i]);
    }

    tipoDoc::factory()->times(config('seeder.tipo_doc'))->create();
  }
}
