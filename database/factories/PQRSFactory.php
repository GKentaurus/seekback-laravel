<?php

namespace Database\Factories;

use App\Models\PQRS;
use App\Models\Cliente;
use App\Models\Administrador;
use App\Models\TipoSolicitud;
use App\Models\EstadosFidelizacion;
use App\Models\Usuario;
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
      'idCliente' => $this->faker->numberBetween(1, Usuario::all()->where('rol', 3)->count()),
      'idAdministrador' => $this->faker->numberBetween(1, Usuario::all()->where('rol', 1)->count()),
      'area' => $this->faker->name(),
      'comentario' => $this->faker->paragraph(1),
      'idEstado' => $this->faker->numberBetween(1, EstadosFidelizacion::all()->count()),
      'fechaRespuesta' => $this->faker->boolean(10) ? $this->faker->date() : null,
    ];
  }
}
