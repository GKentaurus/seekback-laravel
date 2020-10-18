<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Usuario::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'pNombre' => $this->faker->firstName,
      'sNombres' => $this->faker->firstName,
      'pApellido' => $this->faker->lastName,
      'sApellido' => $this->faker->lastName,
      'tipoDoc' => $this->faker->numberBetween(1, 4),
      'numeroDoc' => $this->faker->numberBetween(10000000, 2000000000),
      'contrasena' => $this->faker->word(),
      'rol' => $this->faker->boolean(7) ? 2 : 3,
    ];
  }
}
