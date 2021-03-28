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
        'nombreCategoria' => 'Accesorios',
        'faIcon' => 'fab fa-usb'
      ],
      [
        'nombreCategoria' => 'Cables',
        'faIcon' => 'fas fa-network-wired'
      ],
      [
        'nombreCategoria' => 'Herramientas',
        'faIcon' => 'fas fa-tools'
      ],
      [
        'nombreCategoria' => 'Inalámbricos',
        'faIcon' => 'fas fa-wifi'
      ],
      [
        'nombreCategoria' => 'Switches',
        'faIcon' => 'fas fa-server'
      ],
      [
        'nombreCategoria' => 'Switches Administrables',
        'faIcon' => 'fas fa-desktop'
      ],
      [
        'nombreCategoria' => 'Fibra óptica',
        'faIcon' => 'fa fa-random'
      ],
    ];
    // CategoriasProducto::factory()->times(config('seeder.categorias_producto'))->create();

    foreach ($categorias as $categoria) {
      CategoriasProducto::factory()->create($categoria);
    }
  }
}
