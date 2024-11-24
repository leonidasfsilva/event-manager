<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', 'admin@mail.com')->count()) {
            User::create([
                'name'     => 'Administrador do Sistema',
                'email'    => 'admin@mail.com',
                'password' => bcrypt('123456')

            ]);
        }
    }
}
