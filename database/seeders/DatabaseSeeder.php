<?php

namespace Database\Seeders;

use App\Models\Sign;
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

        Via::factory(50)->create();

        Sign::factory(30)->create();

        
        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);
    }
}
