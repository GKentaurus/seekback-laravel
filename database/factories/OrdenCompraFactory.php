<?php

namespace Database\Factories;

use App\Models\Empleado;
use App\Models\OrdenCompra;
use App\Models\Proveedor;
use App\Models\TRM;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdenCompraFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = OrdenCompra::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'idProveedor' => $this->faker->numberBetween(1, Proveedor::all()->count()),
      'fecha' => $this->faker->date(),
      'docAsociado' => $this->faker->word(),
      'idTRM' => $this->faker->numberBetween(1, TRM::all()->count()),
      'factorImport' => 1.10,
      'idEmpleado' => $this->faker->numberBetween(1, Empleado::all()->count()),
    ];
  }
}
