<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\DocumentoDetallado;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoDetalladoFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = DocumentoDetallado::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $product = Producto::where('idProducto', $this->faker->numberBetween(1, config('seeder.producto')))->first();
    $prefix = $this->faker->randomElement(['COT', 'ODC']);
    $consecutive = 0;

    if ($prefix == 'COT') {
      $consecutive = $this->faker->numberBetween(1, config('seeder.cotizacion'));
    } else {
      $consecutive = $this->faker->numberBetween(1, config('seeder.orden_compra'));
    }

    $detalle = [
      'prefijoDocumento' => $prefix,
      'consecutivo' => $consecutive,
      'idProducto' => $product->idProducto,
      'cantidad' => $this->faker->numberBetween(1, 20),
      'valorUnitario' => $product->precioVenta,
    ];
    return $detalle;
  }
}
