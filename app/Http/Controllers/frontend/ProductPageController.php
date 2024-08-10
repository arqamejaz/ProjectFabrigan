<?php

namespace App\Http\Controllers\frontend;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductPageController extends Controller
{
    public function index(){
        return view('frontend.productPage', 'settings');
    }
}
