<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'office_id',
        'ticket_number',
        'contact_person',
        'event_name',
        'date_start',
        'date_end',
        'call_time',
        'location',
        'assigned_to',
        'status',
        'number_of_tech',
        'remarks',
    ];
}
