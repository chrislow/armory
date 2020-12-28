<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class ItemType extends Model
{
    use HasFactory;

    /**
     * Get the comments for the blog post.
     */
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
