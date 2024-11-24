<?php

namespace Database\Seeders;

use App\Models\EventRoom;
use Illuminate\Database\Seeder;

class EventRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!EventRoom::where('name', 'Auditório Principal')->count()) {
            EventRoom::create(
                [
                    'name'     => 'Auditório Principal',
                    'capacity' => '200',
                ],
            );
        }
        if (!EventRoom::where('name', 'Sala de Concertos')->count()) {
            EventRoom::create(
                [
                    'name'     => 'Sala de Concertos',
                    'capacity' => '500',
                ],
            );
        }
        if (!EventRoom::where('name', 'Sala de Projeção')->count()) {
            EventRoom::create(
                [
                    'name'     => 'Sala de Projeção',
                    'capacity' => '150',
                ],
            );
        }
        if (!EventRoom::where('name', 'Auditório Auxiliar')->count()) {
            EventRoom::create(
                [
                    'name'     => 'Auditório Auxiliar',
                    'capacity' => '100',
                ],
            );
        }

    }
}
