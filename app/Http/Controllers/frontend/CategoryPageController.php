<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryPageController extends Controller
{
    public function index($id){
        $categories = Category::all();
        $accessories = Accessory::all();
        $settings = Setting::first();

        $category = Category::findOrFail($id);
        $products = Product::orderBy('order_no', 'asc')->get();


        return view('frontend.categories', compact('categories', 'accessories', 'category', 'settings', 'products'));
    }
}
