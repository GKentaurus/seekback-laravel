<?php

namespace Database\Factories;

use App\Models\Divisas;
use Illuminate\Database\Eloquent\Factories\Factory;

class DivisasFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Divisas::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'nombre' => $this->faker->words(2),
      'sigla' => $this->faker->words(3),
    ];
  }
}
