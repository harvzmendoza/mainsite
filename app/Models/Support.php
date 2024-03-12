<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Support extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'office_id',
        'ticket_number',
        'name',
        'email',
        'support_name',
        'assigned_to',
        'status',
        'action_taken',
    ];
    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'ticket_number' => $this->ticket_number
        ];
    }
}
