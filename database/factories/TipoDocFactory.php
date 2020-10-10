<?php

namespace Database\Factories;

use App\Models\tipoDoc;
use Illuminate\Database\Eloquent\Factories\Factory;

class tipoDocFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = tipoDoc::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'sigla' => $this->faker->word(),
      'nombreDocument' => $this->faker->paragraph(1),
    ];
  }
}
