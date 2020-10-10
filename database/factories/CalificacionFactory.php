<?php

namespace Database\Factories;

use App\Models\Calificacion;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class CalificacionFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Calificacion::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'idProducto' => $this->faker->numberBetween(1, Producto::all()->count()),
      'calificacion' => $this->faker->numberBetween(1, 5),
    ];
  }
}
