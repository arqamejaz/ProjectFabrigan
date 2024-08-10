<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'about';

    protected $fillable = [
        'WhoWeAre',
        'directorMessage',
        'about',
        'journey',
        'vision',
        'mission',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'image6',
    ];

    // Ensure only one entry is present
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (static::count() > 0) {
                return false; // Prevent creating more than one entry
            }
        });
    }
}
