<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function itemGroup()
    {
        return $this->belongsTo(ItemGroup::class);
    }
}
