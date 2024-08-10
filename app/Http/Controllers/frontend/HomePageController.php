<?php

namespace App\Http\Controllers\frontend;

use App\Models\Media;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    public function index(){
        $settings = Setting::first();
        $categories = Category::orderBy('order_no', 'asc')->get();
        $accessories = Accessory::all();
        $sliders = Slider::all();
        $products = Product::all();
        $media = Media::all();

        return view('frontend.index', compact('settings','categories', 'accessories', 'sliders', 'products', 'media'));
    }
}
