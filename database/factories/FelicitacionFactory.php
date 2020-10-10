<?php

namespace Database\Factories;

use App\Models\Felicitacion;
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
      'dirigidoA' => $this->faker->name()
    ];
  }
}
