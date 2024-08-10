<?php

namespace App\Http\Controllers\frontend;

use App\Models\Event;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventPageController extends Controller
{
    public function index(){
        $categories = Category::all();
        $accessories = Accessory::all();
        $settings = Setting::first();
        $events = Event::orderBy('order_no', 'asc')->get();

        return view('frontend.event', compact('categories', 'accessories', 'settings', 'events'));
    }
}
