<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventStage extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_stage',
        'event_room_id',
        'coffee_space_id',
        'participant_id',
    ];

}
