<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illmunate\Support\Str;

class Category extends Model
{
    use Sluggable, SluggableScopeHelpers;
    protected $fillable = [
        'name',
        'slug',
        'icon',
    ];

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    ## Cara lain
    // public function setNameAtrribute($value)
    // {
    //     $this->attributes['name'] = $value;
    //     $this->atrributes['slug'] = Str::slug($value);
    // }

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
