<?php

namespace Database\Factories;

use App\Models\EstadosFidelizacion;
use App\Models\Producto;
use App\Models\SoporteTecnico;
use Illuminate\Database\Eloquent\Factories\Factory;

class SoporteTecnicoFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = SoporteTecnico::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'idProducto' => $this->faker->numberBetween(1, Producto::all()->count()),
      'idEstado' => $this->faker->numberBetween(1, EstadosFidelizacion::all()->count()),
    ];
  }
}
