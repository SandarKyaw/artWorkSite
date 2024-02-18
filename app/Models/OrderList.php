<?php

namespace App\Models;

use App\Models\User;
use App\Models\ArtWorkList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderList extends Model
{
    use HasFactory;

     protected $fillable = [
        'payment',
        'status',
        'user_id',
        'art_work_list_id'
    ];


   public function user(): BelongsTo
   {
       return $this->belongsTo(User::class);
   }

   public function artWorkList(): BelongsTo
   {
       return $this->belongsTo(ArtWorkList::class);
   }
 }
