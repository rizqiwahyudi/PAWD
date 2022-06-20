<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('12345678')
        ]);

        $role        = Role::where('name', 'admin')->first();

        $permissions = Permission::pluck('id', 'id');
                        
        $role->givePermissionTo([$permissions]);
        $user->assignRole([$role->id]);
    }
}
