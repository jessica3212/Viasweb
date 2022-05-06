<?php

namespace Database\Seeders;

use App\Models\contrato_proyectos;
use App\Models\Maquinaria;
use App\Models\Sign;
use App\Models\User;
use App\Models\Via;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('documentos');
        Storage::makeDirectory('documentos');

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            DepartamentoSeeder::class,
            MunicipioSeeder::class,
        ]);

        User::factory(50)->create();

        Via::factory(50)->create();

        Sign::factory(30)->create();

        Maquinaria::factory(30)->create();

        contrato_proyectos::factory(30)->create();
        
        
    }
}
