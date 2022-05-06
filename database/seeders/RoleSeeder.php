<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        Role::create(['name' => 'Auxiliar']);
        Role::create(['name' => 'Cliente']);

        Permission::create(['name' => 'users.index', 'description' => 'Gestionar usuarios']);
        Permission::create(['name' => 'users.create', 'description' => 'Crear usuarios']);
        Permission::create(['name' => 'users.edit', 'description' => 'Editar usuarios']);
        Permission::create(['name' => 'users.destroy', 'description' => 'Eliminar usuarios']);
        Permission::create(['name' => 'users.show', 'description' => 'Ver usuarios']);
        Permission::create(['name' => 'vias.create', 'description' => 'Crear vias']);
        Permission::create(['name' => 'vias.edit', 'description' => 'Editar vias']);
        Permission::create(['name' => 'vias.destroy', 'description' => 'Eliminar vias']);
        Permission::create(['name' => 'signs.create', 'description' => 'Crear señales']);
        Permission::create(['name' => 'signs.edit', 'description' => 'Editar señales']);
        Permission::create(['name' => 'signs.destroy', 'description' => 'Eliminar señales']);

        $role1->givePermissionTo(Permission::all());

    }
}
