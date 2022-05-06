<?php

namespace Database\Factories;

use App\Models\Maquinaria;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaquinariaFactory extends Factory
{
    
    protected $model = Maquinaria::class;
    public function definition()
    {
        return [
            'municipio' => $this->faker->city(),
            'tramo' => $this->faker->sentence(),
            'afirmado' => $this->faker->randomFloat(2, 0, 100),
            'pavimentada' => $this->faker->randomFloat(2, 0, 100),
            'terciarias' => $this->faker->randomFloat(2, 0, 100),
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
