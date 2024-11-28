<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'path_video',
        'about',
        'price',
        'open_time_at',
        'closed_time_at',
        'is_popular',
        'address',
        'category_id',
        'seller_id',
    ];

    // relasi banyak ke 1
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function seller(): BelongsTo
    {
        return $this->belongsTo(Seller::class, 'seller_id');
    }

    // relasi 1 ke banyak
    public function photos(): HasMany
    {
        return $this->hasMany(TicketPhoto::class);
    }

    // untuk membuat slug
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
            ];
    }
}
