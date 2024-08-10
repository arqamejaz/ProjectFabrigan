<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'accessoryh', 'accessorysh', 'categoryh', 'categorysh', 'catalogueh',
        'cataloguesh', 'mediah', 'mediash', 'eventh', 'eventsh', 'abouth',
        'aboutsh', 'contacth', 'contactsh', 'bannercontact', 'bannermsg',
        'banneremail', 'footerfb', 'footerinsta', 'footertwitter', 'footeryoutube'
    ];
}
