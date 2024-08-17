<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    protected $fillable = ['name','order_no', 'description', 'serviceImages' ,'sliderImages'];
}
