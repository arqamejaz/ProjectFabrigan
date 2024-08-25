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
            $image = $request->file('aboutimage');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('uploads/aboutus'), $imageName);
            $about->image1 = $imageName;
        }

        if ($request->hasFile('imagedirector')) {
            $image = $request->file('imagedirector');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('uploads/aboutus'), $imageName);
            $about->image2 = $imageName;
        }

        if ($request->hasFile('imageabout')) {
            $image = $request->file('imageabout');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('uploads/aboutus'), $imageName);
            $about->image3 = $imageName;
        }

        if ($request->hasFile('imagejourney')) {
            $image = $request->file('imagejourney');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('uploads/aboutus'), $imageName);
            $about->image4 = $imageName;
        }

        if ($request->hasFile('imagevision')) {
            $image = $request->file('imagevision');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('uploads/aboutus'), $imageName);
            $about->image5 = $imageName;
        }

        if ($request->hasFile('imagemission')) {
            $image = $request->file('imagemission');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('uploads/aboutus'), $imageName);
            $about->image6 = $imageName;
        }

        $about->save();

        return redirect()->route('admin.aboutus')->with('success', 'About section updated successfully.');
    }
}
