<?php

namespace App\Http\Controllers\frontend;

use App\Models\Media;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MediaPageController extends Controller
{
    public function index(){
        $categories = Category::all();
        $accessories = Accessory::all();
        $settings = Setting::first();

        $media = Media::orderBy('order_no', 'asc')->get();


        return view('frontend.media', compact('categories', 'accessories', 'settings', 'media'));
    }
}
