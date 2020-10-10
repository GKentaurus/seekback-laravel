<?php

namespace Database\Factories;

use App\Models\EstadosFidelizacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstadosFidelizacionFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = EstadosFidelizacion::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'nombreEstado' => $this->faker->name(),
    ];
  }
}
