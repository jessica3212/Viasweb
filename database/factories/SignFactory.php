<?php

namespace Database\Factories;

use App\Models\Sign;
use App\Models\Via;
use Illuminate\Database\Eloquent\Factories\Factory;

class SignFactory extends Factory
{
    protected $model = Sign::class;
    public function definition()
    {
        return [
            'abscisa' => $this->faker->unique()->randomNumber(5),
            'costado' => 'Norte',
            'descripcion' => $this->faker->sentence(5),
            'estado_tablero' => $this->faker->randomElement(['B', 'R', 'M']),
            'estado_paral' => $this->faker->randomElement(['B', 'R', 'M']),
            'dimensiones' => $this->faker->randomFloat(2, 0, 100),
            'leyenda' => $this->faker->sentence(5),
            'observaciones' => $this->faker->sentence(5),
            'cordenadas' => null,
            'via_id' => Via::factory(),
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
