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
    CategoriasProducto::factory()->times(config('seeder.categorias_producto'))->create();
  }
}
