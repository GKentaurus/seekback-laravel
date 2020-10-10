<?php

namespace Database\Factories;

use App\Models\CategoriasProducto;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Producto::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'modeloProducto' => ($this->faker->firstName() . $this->faker->lastName()),
      'descripcion' => $this->faker->paragraph(1),
      'precioVenta' => ($this->faker->numberBetween(10, 300)) * 1000,
      'idCategoria' => $this->faker->numberBetween(1, CategoriasProducto::all()->count()),
      'estado' => $this->faker->boolean(95),
    ];
  }
}
