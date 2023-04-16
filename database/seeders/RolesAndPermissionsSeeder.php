<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'manage users']);
        $role->givePermissionTo($permission);

        $this->command->info('"admin" role and "manage users" permission created successfully!');
    }
}
