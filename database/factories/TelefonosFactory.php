<?php

namespace Database\Factories;

use App\Models\Telefonos;
use Illuminate\Database\Eloquent\Factories\Factory;

class TelefonosFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Telefonos::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'idUsuario' => $this->faker->numberBetween(1, config('seeder.usuarios')),
      'numeroTelefono' => $this->faker->e164PhoneNumber,
      'esPrincipal' => true,
    ];
  }
}
