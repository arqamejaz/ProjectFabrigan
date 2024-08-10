<?php

namespace App\Http\Controllers\Backend;

use App\Models\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MediaController extends Controller
{

    public function index()
    {
        // Retrieve media ordered by order_no
        $media = Media::orderBy('order_no', 'asc')->get();

        return view('backend.media.listMedia', compact('media'));
    }
    public function Addnew()
    {
        return view('backend.media.addMedia');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'order_no' => 'required|integer',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Create and save the media
        $media = new media();
        $media->name = $request->input('name');
        $media->order_no = $request->input('order_no');
        $media->description = $request->input('description');

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('uploads/media'), $imageName);
            $media->image = $imageName;
        }
        $media->save();

        return redirect()->route('admin.listmedia')->with('success', 'Media added successfully.');
    }

    public function edit($id)
    {
        $media = Media::findOrFail($id);
        return view('backend.media.editmedia', compact('media'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'order_no' => 'required|integer',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Find the media
        $media = Media::findOrFail($id);

        // Update the media
        $media->name = $request->input('name');
        $media->description = $request->input('description');
        $media->order_no = $request->input('order_no');

        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('uploads/media'), $imageName);
                $imagePaths[] = $imageName;
            }
            $media->images = implode(',', $imagePaths);
        }

        $media->save();

        return redirect()->route('admin.listMedia')->with('success', 'Media updated successfully.');
    }

    public function delete($id)
    {
        $media = Media::findOrFail($id);
        $media->delete();

        return redirect()->route('admin.listMedia')->with('success', 'Media deleted successfully.');
    }
}
