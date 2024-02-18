<?php

namespace App\Models;

use App\Models\OrderList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArtWorkList extends Model
{
    use HasFactory;

        protected $fillable = [
        'title',
        'image',
        'description',
        'price',
        'artist',
        'like',
        'view'
    ];

    public function OrderList(): HasMany
    {
        return $this->hasMany(OrderList::class);
    }
}


