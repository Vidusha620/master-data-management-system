<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'brand_id',
        'category_id',
        'code',
        'name',
        'attachment',
        'status',
    ];
}
