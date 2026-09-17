<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@teste.com',
                'password' => 'senhasegura321',
                'role' => 'admin',
            ],
            [
                'name' => 'Usuario',
                'email' => 'user@teste.com',
                'password' => 'senha123',
                'role' => 'user',
            ],
        ];
    }
}
