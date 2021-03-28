<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Proveedor;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedorFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Proveedor::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'tipoDoc' => 3,
      'numeroDoc' => $this->faker->numberBetween(890000000, 999999999),
      'digitoVerif' => $this->faker->numberBetween(0, 9),
      'razonSocial' => $this->faker->name(),
      'telefono' => $this->faker->e164PhoneNumber,
      'email' => $this->faker->safeEmail,
      'idCliente' => $this->faker->numberBetween(1, Usuario::all()->where('rol', 3)->count()),
    ];
  }
}
