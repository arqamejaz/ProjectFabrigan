<?php

namespace App\Http\Controllers\Backend;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index(){
        $settings = Setting::firstOrNew();
        return view('backend.settings.settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $settings = Setting::firstOrNew();
        $settings->fill($request->all());
        $settings->save();

        return redirect()->back()->with('success', 'Settings updated successfully');
    }
}
