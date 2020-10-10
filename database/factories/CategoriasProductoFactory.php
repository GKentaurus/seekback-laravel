<?php

namespace Database\Factories;

use App\Models\CategoriasProducto;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriasProductoFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = CategoriasProducto::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'nombreCategoria' => $this->faker->word(),
    ];
  }
}
