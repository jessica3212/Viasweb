<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jessica Paola',
            'apellido' => 'Camacho',
            'documento' => '0123456789',
            'email' => 'jessica@unisangil.edu.co',
            'password' => bcrypt('jessica123')

        ])->assignRole('Administrador');

        User::create([
            'name' => 'Jeison Diaz',
            'apellido' => 'Camacho',
            'documento' => '456546987',
            'email' => 'jeison@unisangil.edu.co',
            'password' => bcrypt('jeison123')

        ])->assignRole('Administrador');
    }
}
