<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'      =>  'admin',
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('12345678'),
            'level'     => 'admin'
        ]);

        $teacher = User::create([
            'name'      =>  'teacher',
            'email'     => 'teacher@gmail.com',
            'password'  => Hash::make('12345678'),
            'level'     => 'teacher'
        ]);

        $student = User::create([
            'name'      =>  'student',
            'email'     => 'student@gmail.com',
            'password'  => Hash::make('12345678'),
            'level'     => 'student'
        ]);
    }
}
