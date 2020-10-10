<?php

namespace Database\Factories;

use App\Models\Cotizacion;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\EstadosCotizacion;
use App\Models\TRM;
use Illuminate\Database\Eloquent\Factories\Factory;

class CotizacionFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Cotizacion::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'requerimiento' => $this->faker->paragraph(1),
      'fecha' => $this->faker->date(),
      'vencimiento' => $this->faker->date(),
      'idTRM' => $this->faker->numberBetween(1, TRM::all()->count()),
      'idEstado' => $this->faker->numberBetween(1, EstadosCotizacion::all()->count()),
      'idEmpleado' => $this->faker->numberBetween(1, Empleado::all()->count()),
      'idCliente' => $this->faker->numberBetween(1, Cliente::all()->count()),
    ];
  }
}
