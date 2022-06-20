<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'user.list',
            'user.show',
            'user.create',
            'user.edit',
            'user.delete',
            'permission.list',
            'permission.show',
            'permission.create',
            'permission.edit',
            'permission.delete',
            'role.list',
            'role.show',
            'role.create',
            'role.edit',
            'role.delete',
            'event.list',
            'event.show',
            'event.create',
            'event.edit',
            'event.delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name'       => $permission,
            ]);
        }
    }
}
