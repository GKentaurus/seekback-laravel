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
    $productos = Producto::all();
    $bodegas = Bodega::all();

    foreach ($productos as $producto) {
      foreach ($bodegas as $bodega) {
        $bodega_producto = [
          'idBodega' => $bodega->idBodega,
          'idProducto' => $producto->idProducto,
          'cantidad' => rand(10, 1000),
        ];

        BodegaProducto::factory()->create($bodega_producto);
      }
    }
  }
}
