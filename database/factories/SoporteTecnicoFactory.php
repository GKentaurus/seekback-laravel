<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\EstadosFidelizacion;
use App\Models\Producto;
use App\Models\SoporteTecnico;
use App\Models\Usuario;
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
      'idCliente' => $this->faker->numberBetween(1, Usuario::all()->where('rol', 3)->count()),
      'idEmpleado' => $this->faker->numberBetween(1, Usuario::all()->where('rol', 2)->count()),
      'comentario' => $this->faker->paragraph(1),
      'idEstado' => $this->faker->numberBetween(1, EstadosFidelizacion::all()->count()),
      'fechaRespuesta' => $this->faker->boolean(10) ? $this->faker->date() : null,
    ];
  }
}
