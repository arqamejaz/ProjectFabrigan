<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductPageController extends Controller
{
    public function index(){
        $categories = Category::all();
        $accessories = Accessory::all();
        $settings = Setting::first();
        $products = Product::orderBy('order_no', 'asc')->get();
        return view('frontend.productPage', compact('categories', 'accessories' ,'settings', 'products'));
    }
}
