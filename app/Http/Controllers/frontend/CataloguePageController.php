<?php

namespace App\Http\Controllers\frontend;

use App\Models\Setting;
use App\Models\Category;
use App\Models\Accessory;
use App\Models\Catalogue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CataloguePageController extends Controller
{
    public function index(){

        $categories = Category::all();
        $accessories = Accessory::all();
        $settings = Setting::first();

        $catalogues = Catalogue::orderBy('order_no', 'asc')->get();

        return view('frontend.catalogue', compact('categories', 'accessories', 'settings', 'catalogues'));
    }
}
