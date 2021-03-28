<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Felicitacion;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class FelicitacionFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Felicitacion::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'idCliente' => $this->faker->numberBetween(1, Usuario::all()->where('rol', 3)->count()),
      'dirigidoA' => $this->faker->name(),
      'comentario' => $this->faker->paragraph(1),
    ];
  }
}
