<?php

namespace Database\Seeders;

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

        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);
    }
}
