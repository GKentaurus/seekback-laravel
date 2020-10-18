<?php

namespace Database\Factories;

use App\Models\Direcciones;
use Illuminate\Database\Eloquent\Factories\Factory;

class DireccionesFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Direcciones::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'idRegistro' => $this->faker->numberBetween(1, config('seeder.usuarios')),
      'pseudonimo' => $this->faker->word(),
      'direccion' => $this->faker->address,
      'telefono' => $this->faker->e164PhoneNumber,
      'localizacion' => $this->faker->numberBetween(1, config('seeder.ciudad')),
    ];
  }
}
