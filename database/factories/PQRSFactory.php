<?php

namespace Database\Factories;

use App\Models\EstadosFidelizacion;
use App\Models\PQRS;
use App\Models\TipoSolicitud;
use Illuminate\Database\Eloquent\Factories\Factory;

class PQRSFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = PQRS::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'idTipoSolicitud' => $this->faker->numberBetween(1, TipoSolicitud::all()->count()),
      'area' => $this->faker->name(),
      'idEstado' => $this->faker->numberBetween(1, EstadosFidelizacion::all()->count()),
    ];
  }
}
