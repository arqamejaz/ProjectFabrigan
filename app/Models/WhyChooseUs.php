<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyChooseUs extends Model
{
    use HasFactory;

    // The table associated with the model (optional if the table name matches the model name in lowercase and plural form)
    // protected $table = 'why_choose_us';

    // The attributes that are mass assignable
    protected $fillable = [
        'order_no',
        'image_text',
        'image',
    ];
}
