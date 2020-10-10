<?php

namespace Database\Seeders;

use App\Models\Cotizacion;
use App\Models\ProformaVenta;
use Illuminate\Database\Seeder;

class ProformaVentaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $CotAprobadas = Cotizacion::all()->where('idEstado', 2);

    foreach ($CotAprobadas as $cotizacion) {
      $form = [
        'cotizacionAsociada' => $cotizacion->idCotizacion,
        'fecha' => $cotizacion->fecha,
        'vencimiento' => $cotizacion->vencimiento,
      ];

      ProformaVenta::factory()->create($form);
    }
  }
}
