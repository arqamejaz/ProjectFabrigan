<?php

namespace App\Http\Controllers\frontend;

use App\Models\Setting;
use App\Models\Category;
use App\Models\Accessory;
use App\Models\Contactus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactPageController extends Controller
{
    public function index(){
        $categories = Category::all();
        $accessories = Accessory::all();
        $settings = Setting::first();
        $contact = Contactus::first();

        return view('frontend.contact', compact('categories', 'accessories', 'settings', 'contact'));
    }
}
