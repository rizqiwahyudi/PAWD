<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'      => 'operator',
            'email'     => 'operator@gmail.com',
            'password'  => Hash::make('12345678')
        ]);

        $role        = Role::where('name', 'operator')->first();

        $permissions = Permission::whereIn('name', [
            'event.create',
            'event.edit'
        ])->get();
                        
        $role->givePermissionTo([$permissions]);
        $user->assignRole([$role->id]);
    }
}
