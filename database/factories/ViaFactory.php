<?php

namespace Database\Factories;

use App\Models\Via;
use Illuminate\Database\Eloquent\Factories\Factory;

class ViaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Via::class;

    public function definition()
    {
        return [
            'codigo_via' => $this->faker->unique()->randomNumber(5),
            'competencia' => 'Departamento',
            'responsable' => 'CASANARE',
            'orden_resolucion' => 'Segundo',
            'nombre_via' => $this->faker->sentence(5),
            'longitud' => $this->faker->randomFloat(2, 0, 100),
            'ancho_prom' => $this->faker->randomFloat(2, 0, 100),
            'pr_inicio' => $this->faker->randomFloat(2, 0, 100),
            'pr_final' => $this->faker->randomFloat(2, 0, 100),
            'ubicacion_desde' => $this->faker->sentence(5),
            'ubicacion_hasta' => $this->faker->sentence(5),
            'pav_bueno' => $this->faker->randomFloat(2, 0, 100),
            'pav_regular' => $this->faker->randomFloat(2, 0, 100),
            'pav_malo' => $this->faker->randomFloat(2, 0, 100),
            'afir_bueno' => $this->faker->randomFloat(2, 0, 100),
            'afir_regular' => $this->faker->randomFloat(2, 0, 100),
            'afir_malo' => $this->faker->randomFloat(2, 0, 100),
            'tierra_bueno' => $this->faker->randomFloat(2, 0, 100),
            'tierra_regular' => $this->faker->randomFloat(2, 0, 100),
            'tierra_malo' => $this->faker->randomFloat(2, 0, 100),
            'mej_bueno' => $this->faker->randomFloat(2, 0, 100),
            'mej_regular' => $this->faker->randomFloat(2, 0, 100),
            'mej_malo' => $this->faker->randomFloat(2, 0, 100),
            'inicio_longitud' => $this->faker->randomFloat(2, 0, 100),
            'inicio_latitud' => $this->faker->randomFloat(2, 0, 100),
            'inicio_altura' => $this->faker->randomFloat(2, 0, 100),
            'fin_longitud' => $this->faker->randomFloat(2, 0, 100),
            'fin_latitud' => $this->faker->randomFloat(2, 0, 100),
            'fin_altura' => $this->faker->randomFloat(2, 0, 100),            
        ];
    }
}
