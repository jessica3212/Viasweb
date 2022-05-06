<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioSeeder extends Seeder
{
    public function run()
    {
        DB::table('municipios')->insert([
            ['nombre' => 'Aguazul', 'departamento_id' => 1],
            ['nombre' => 'Chámeza', 'departamento_id' => 1],
            ['nombre' => 'Hato Corozal', 'departamento_id' =>1],
            ['nombre' => 'La Salina', 'departamento_id' => 1],
            ['nombre' => 'Maní', 'departamento_id' => 1],
            ['nombre' => 'Monterrey', 'departamento_id' => 1],
            ['nombre' => 'Nunchía', 'departamento_id' => 1],
            ['nombre' => 'Orocué', 'departamento_id' => 1],
            ['nombre' => 'Paz de Ariporo', 'departamento_id' => 1],
            ['nombre' => 'Pore', 'departamento_id' => 1],
            ['nombre' => 'Recetor', 'departamento_id' => 1],
            ['nombre' => 'Sabanalarga', 'departamento_id' => 1],
            ['nombre' => 'San Luis de Palenque', 'departamento_id' => 1],
            ['nombre' => 'Sácama', 'departamento_id' => 1],
            ['nombre' => 'Támara', 'departamento_id' => 1],
            ['nombre' => 'Tauramena', 'departamento_id' => 1],
            ['nombre' => 'Trinidad', 'departamento_id' => 1],
            ['nombre' => 'Villanueva', 'departamento_id' => 1],
            ['nombre' => 'Yopal', 'departamento_id' => 1],
        ]);       
    }
}