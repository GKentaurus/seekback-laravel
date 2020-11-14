<?php

namespace Database\Factories;

use App\Models\TipoDoc;
use Illuminate\Database\Eloquent\Factories\Factory;

class TipoDocFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = TipoDoc::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'sigla' => $this->faker->word(),
      'nombreDocumento' => $this->faker->paragraph(1),
    ];
  }
}
