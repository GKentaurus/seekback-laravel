<?php

namespace Database\Factories;

use App\Models\Administrador;
use App\Models\Agenda;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\EstadosAgenda;
use App\Models\TipoServicio;
use App\Models\Usuario;
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
      'idEstado' => $this->faker->numberBetween(1, EstadosAgenda::all()->count()),
      'idTipoServicio' => $this->faker->numberBetween(1, TipoServicio::all()->count()),
      'idCliente' => $this->faker->numberBetween(1, Usuario::all()->where('rol', 3)->count()),
      'idEmpleado' => $this->faker->numberBetween(1, Usuario::all()->where('rol', 2)->count()),
      'idAdministrador' => $this->faker->numberBetween(1, Usuario::all()->where('rol', 1)->count()),
    ];
  }
}
