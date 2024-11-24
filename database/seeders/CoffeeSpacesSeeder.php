<?php

namespace Database\Seeders;

use App\Models\CoffeeSpace;
use Illuminate\Database\Seeder;

class CoffeeSpacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!CoffeeSpace::where('name', 'Starbucks')->count()) {
            CoffeeSpace::create(
                [
                    'name'     => 'Starbucks',
                    'capacity' => '50',
                ],
            );
        }
        if (!CoffeeSpace::where('name', 'SaluteYou\'s Bar')->count()) {
            CoffeeSpace::create(
                [
                    'name'     => 'SaluteYou\'s Bar',
                    'capacity' => '150',
                ],
            );
        }
        if (!CoffeeSpace::where('name', 'Cantina')->count()) {
            CoffeeSpace::create(
                [
                    'name'     => 'Cantina',
                    'capacity' => '30',
                ],
            );
        }
        if (!CoffeeSpace::where('name', 'Praça de Alimentação')->count()) {
            CoffeeSpace::create(
                [
                    'name'     => 'Praça de Alimentação',
                    'capacity' => '500',
                ],
            );
        }

    }
}
