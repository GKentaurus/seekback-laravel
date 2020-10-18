<?php

namespace Database\Factories;

use App\Models\Correos;
use Illuminate\Database\Eloquent\Factories\Factory;

class CorreosFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Correos::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'idUsuario' => $this->faker->numberBetween(1, config('seeder.usuarios')),
      'correoElectronico' => $this->faker->safeEmail,
      'esPrincipal' => true,
    ];
  }
}
