<?php

namespace Database\Factories;

use App\Models\Administrador;
use App\Models\Calificacion;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Felicitacion;
use App\Models\Fidelizacion;
use App\Models\PQRS;
use App\Models\SoporteTecnico;
use Illuminate\Database\Eloquent\Factories\Factory;

class FidelizacionFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Fidelizacion::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'idCalificacion' => $this->faker->numberBetween(1, Calificacion::all()->count()),
      'idFelicitacion' => $this->faker->numberBetween(1, Felicitacion::all()->count()),
      'idPQRS' => $this->faker->numberBetween(1, PQRS::all()->count()),
      'idSoporte' => $this->faker->numberBetween(1, SoporteTecnico::all()->count()),
      'fechaInicio' => $this->faker->date(),
      'fechaFin' => $this->faker->date(),
      'comentario'  => $this->faker->paragraph(1),
      'idCliente' => $this->faker->numberBetween(1, Cliente::all()->count()),
      'idAdministrador' => $this->faker->numberBetween(1, Administrador::all()->count()),
      'idEmpleado' => $this->faker->numberBetween(1, Empleado::all()->count()),
    ];
  }
}
