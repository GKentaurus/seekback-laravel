<?php

namespace Database\Factories;

use App\Models\Divisas;
use App\Models\TRM;
use Illuminate\Database\Eloquent\Factories\Factory;

class TRMFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = TRM::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'idDivisa' => $this->faker->numberBetween(1, Divisas::all()->count()),
      'fechaTRM' => $this->faker->date(),
      'tasaCambio' => 3000 + $this->faker->numberBetween(0, 1000),
    ];
  }
}
