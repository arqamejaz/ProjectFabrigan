<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccessoryPageController extends Controller
{
    public function index($id){
        $accessory = Accessory::findOrFail($id);
        $categories = Category::all();
        $accessories = Accessory::all();
        $settings = Setting::first();

        $products = Product::where('accessory_id', $id)->orderBy('order_no', 'asc')->get();

        return view('frontend.accessories', compact('categories', 'accessories', 'accessory', 'settings', 'products'));
    }
}
