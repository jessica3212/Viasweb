<?php

namespace Database\Factories;

use App\Models\contrato_proyectos;
use App\Models\Via;
use Illuminate\Database\Eloquent\Factories\Factory;

class contrato_proyectosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(5),
            'url_file' => $this->faker->sentence(5),
            'estado' => $this->faker->randomElement([contrato_proyectos::APROBADO,contrato_proyectos::DESAPROBADO,contrato_proyectos::PENDIENTE]),
            'tipo' => $this->faker->randomElement([contrato_proyectos::PROYECTO,contrato_proyectos::CONTRATO]),
            'via_id' => Via::all()->random()->id,
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
