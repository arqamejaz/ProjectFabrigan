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
        $category = Category::findOrFail($id);
        $categories = Category::all();
        $accessories = Accessory::all();
        $settings = Setting::first();

        $products = Product::where('category_id', $id)->orderBy('order_no', 'asc')->get();


        return view('frontend.categories', compact('categories', 'accessories', 'category', 'settings', 'products'));
    }
}
