<?php

namespace App\Http\Controllers\Backend;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::firstOrCreate([]);
        return view('backend.settings.aboutus', compact('about'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'WhoWeAre' => 'nullable|string',
            'directorMessage' => 'nullable|string',
            'about' => 'nullable|string',
            'journey' => 'nullable|string',
            'vision' => 'nullable|string',
            'mission' => 'nullable|string',
            'aboutimage' => 'nullable|image',
            'imagedirector' => 'nullable|image',
            'imageabout' => 'nullable|image',
            'imagejourney' => 'nullable|image',
            'imagevision' => 'nullable|image',
            'imagemission' => 'nullable|image',
        ]);

        $about = About::firstOrCreate([]);

        $about->WhoWeAre = $request->WhoWeAre;
        $about->directorMessage = $request->directorMessage;
        $about->about = $request->about;
        $about->journey = $request->journey;
        $about->vision = $request->vision;
        $about->mission = $request->mission;

        if ($request->hasFile('aboutimage')) {
            $about->image1 = $request->file('aboutimage')->store('uploads', 'public');
        }
        if ($request->hasFile('imagedirector')) {
            $about->image2 = $request->file('imagedirector')->store('uploads', 'public');
        }
        if ($request->hasFile('imageabout')) {
            $about->image3 = $request->file('imageabout')->store('uploads', 'public');
        }
        if ($request->hasFile('imagejourney')) {
            $about->image4 = $request->file('imagejourney')->store('uploads', 'public');
        }
        if ($request->hasFile('imagevision')) {
            $about->image5 = $request->file('imagevision')->store('uploads', 'public');
        }
        if ($request->hasFile('imagemission')) {
            $about->image6 = $request->file('imagemission')->store('uploads', 'public');
        }

        $about->save();

        return redirect()->route('admin.aboutus')->with('success', 'About section updated successfully.');
    }
}
