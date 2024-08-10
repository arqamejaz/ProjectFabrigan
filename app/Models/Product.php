<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','order_no', 'type', 'category_id', 'accessory_id', 'image', 'images'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function accessory()
    {
        return $this->belongsTo(Accessory::class, 'accessory_id');
    }
}

