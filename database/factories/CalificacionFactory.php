<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Calificacion;
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
      'idCliente' => $this->faker->numberBetween(1, Cliente::all()->count()),
      'idProducto' => $this->faker->numberBetween(1, Producto::all()->count()),
      'calificacion' => $this->faker->numberBetween(1, 5),
      'comentario' => $this->faker->boolean(50) ? $this->faker->paragraph(1) : null,
      'esAprobado' => $this->faker->boolean(70),
    ];
  }
}
