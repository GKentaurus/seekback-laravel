<?php

namespace Database\Seeders;

use App\Models\DocumentoDetallado;
use App\Models\Producto;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoDetalladoSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DocumentoDetallado::factory()->times(config('seeder.documento_detallado'))->create();
  }
}
