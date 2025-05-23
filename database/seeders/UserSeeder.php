<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
            [
                [
                    'name'=> 'admin',
                    'midlename'=> 'admin',
                    'lastname'=> 'admin',
                    'login'=> 'adminka',
                    'password'=> Hash::make('password'),
                    'tel'=> '123456789',
                    'email'=> 'admin@mail.com',
                ],
            ]
        );
    }
}
