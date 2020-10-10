<?php

namespace Database\Seeders;

use App\Models\OrdenCompra;
use Illuminate\Database\Seeder;

class OrdenCompraSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    OrdenCompra::factory()->times(config('seeder.orden_compra'))->create();
  }
}
