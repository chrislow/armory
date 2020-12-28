<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ItemType;
use App\Models\User;

class Item extends Model
{
    use HasFactory;

    /**
     * Get the itemType that owns the comment.
     */
    public function itemType()
    {
        return $this->belongsTo(ItemType::class);
    }

    /**
     * Get the user that owns the item.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
