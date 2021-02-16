<?php

namespace Database\Factories;

use App\Models\Thundertalk;
use Illuminate\Database\Eloquent\Factories\Factory;

class ThundertalkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Thundertalk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'title' => $this->faker->name
      ];
    }
}
