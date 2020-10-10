<?php

namespace Database\Seeders;

use App\Models\Bodega;
use App\Models\BodegaProducto;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class BodegaProductoSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    for ($i = 1; $i <= Bodega::all()->count(); $i++) {
      for ($j = 1; $j <= Producto::all()->count(); $j++) {
        $bodega_producto = [
          'idBodega' => Bodega::where('idBodega', $i)->first()->idBodega,
          'idProducto' => Producto::where('idProducto', $i)->first()->idProducto,
          'cantidad' => rand(10, 1000),
        ];

        BodegaProducto::factory()->create($bodega_producto);
      }
    }
  }
}
