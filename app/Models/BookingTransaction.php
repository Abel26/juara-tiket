<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingTransaction extends Model
{
    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'total_amount',
        'is_paid',
        'total_participant',
        'ticket_id',
        'started_at',
        'proof',
        'booking_trx_id',
    ];

    public function tickets(): BelongsTo
    {
        return $this->belongsTo(Ticket::class, 'ticket_id');
    }
}
