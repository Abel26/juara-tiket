<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketPhoto extends Model
{
    protected $fillable = [
        'photo',
        'ticket_id',
    ];
}
