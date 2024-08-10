<?php

namespace App\Http\Controllers\frontend;

use App\Models\About;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutPageController extends Controller
{
    public function index(){
        $categories = Category::all();
        $accessories = Accessory::all();
        $settings = Setting::first();
        $about = About::firstOrCreate([]);

        return view('frontend.about', compact('categories', 'accessories', 'settings', 'about'));
    }
}
