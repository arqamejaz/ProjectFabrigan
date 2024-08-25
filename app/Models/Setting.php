<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'password','accessoryh', 'accessorysh', 'categoryh', 'categorysh', 'catalogueh',
        'cataloguesh', 'mediah', 'mediash', 'eventh', 'eventsh', 'abouth',
        'aboutsh', 'contacth', 'contactsh', 'producth', 'productsh', 'bannercontact', 'bannermsg',
        'banneremail', 'footerfb', 'footerinsta', 'footertwitter', 'footeryoutube',
        'LPVheading', 'LPVdescription'
    ];
}
