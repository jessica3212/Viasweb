<?php

namespace Database\Factories;

use App\Models\Via;
use Illuminate\Database\Eloquent\Factories\Factory;

class SignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'abscisa' => $this->faker->unique()->randomNumber(5),
            'costado' => 'Norte',
            'descripcion' => $this->faker->sentence(5),
            'estado_tablero' => 'B',
            'estado_paral' => 'B',
            'dimensiones' => $this->faker->randomFloat(2, 0, 100),
            'leyenda' => $this->faker->sentence(5),
            'observaciones' => $this->faker->sentence(5),
            'cordenadas' => null,
            'via_id' => Via::factory(),
        ];
    }
}
