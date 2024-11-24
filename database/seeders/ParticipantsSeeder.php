<?php

namespace Database\Seeders;

use App\Models\Participant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Participant::where('name', 'Christopher')->count()) {
            Participant::create(
                [
                    'name'     => 'Christopher',
                    'lastname' => 'Nolan',
                ],
            );
        }
        if (!Participant::where('name', 'Christian')->count()) {
            Participant::create(
                [
                    'name'     => 'Christian',
                    'lastname' => 'Bale',
                ],
            );
        }
        if (!Participant::where('name', 'Heath')->count()) {
            Participant::create(
                [
                    'name'     => 'Heath',
                    'lastname' => 'Ledger',
                ],
            );
        }

    }
}
