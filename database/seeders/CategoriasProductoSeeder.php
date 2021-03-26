<?php

namespace Database\Seeders;

use App\Models\CategoriasProducto;
use Illuminate\Database\Seeder;

class CategoriasProductoSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $categorias = [
      [
        'nombreCategoria' => 'Cable',
      ],
      [
        'nombreCategoria' => 'Adaptadores',
      ],
      [
        'nombreCategoria' => 'Equipos inalámbricos',
      ],
      [
        'nombreCategoria' => 'Conmutadores',
      ],
    ];
    // CategoriasProducto::factory()->times(config('seeder.categorias_producto'))->create();

    foreach ($categorias as $categoria) {
      CategoriasProducto::factory()->create($categoria);
    }
  }
}
