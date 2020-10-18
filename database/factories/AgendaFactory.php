<?php

namespace Database\Factories;

use App\Models\Administrador;
use App\Models\Agenda;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\EstadoAgenda;
use App\Models\TipoServicio;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgendaFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Agenda::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'fecha' => $this->faker->date(),
      'observaciones' => $this->faker->paragraph(1),
      'idEstado' => $this->faker->numberBetween(1, EstadoAgenda::all()->count()),
      'idTipoServicio' => $this->faker->numberBetween(1, TipoServicio::all()->count()),
      'idCliente' => $this->faker->numberBetween(1, Cliente::all()->count()),
      'idEmpleado' => $this->faker->numberBetween(1, Empleado::all()->count()),
      'idAdministrador' => $this->faker->numberBetween(1, Administrador::all()->count()),
    ];
  }
}
