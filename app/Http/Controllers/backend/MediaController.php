<?php

namespace App\Http\Controllers\Backend;

use App\Models\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Vimeo\Laravel\Facades\Vimeo;

class MediaController extends Controller
{

    public function index()
    {
        // Retrieve media ordered by order_no
        $media = Media::orderBy('order_no', 'asc')->get();

        return view('backend.media.listMedia', compact('media'));
    }
    public function addnew()
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
            'featured' => 'nullable|boolean',
            'video' => 'required|mimes:mp4,mov,ogg,qt|max:20000', // Validate video file type and size
        ]);

        // Create and save the media
        $media = new Media(); // Assuming your model is named `Media`
        $media->name = $request->input('name');
        $media->order_no = $request->input('order_no');
        $media->description = $request->input('description');
        $media->featured = $request->input('featured', 0);

        // Handle video upload
        // if ($request->hasFile('video')) {
        //     $video = $request->file('video');
        //     $videoName = time() . '_' . $video->getClientOriginalName();
        //     $video->move(public_path('uploads/media/videos'), $videoName);
        //     $media->video = $videoName; // Store only the filename in the database
        // }

        // Handle video upload to Vimeo
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $path = $video->getRealPath();

            // Upload video to Vimeo
            $response = Vimeo::upload($path, [
                'name' => $media->name,
                'description' => $media->description,
            ]);
            $videoId = explode('_', $response)[0]; // Extracts "1724152938"
            // Store the Vimeo video URL or ID in the database
            $media->video = $videoId;
        }

        $media->save();

        return redirect()->route('admin.listmedia')->with('success', 'Media added successfully.');
    }


    public function edit($id)
    {
        $media = Media::findOrFail($id);
        return view('backend.media.editMedia', compact('media'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'order_no' => 'required|integer',
            'description' => 'nullable|string',
            'featured' => 'nullable|boolean',
            'video' => 'required|mimes:mp4,mov,ogg,qt|max:20000', // Validate video file type and size
        ]);

        // Find the media
        $media = Media::findOrFail($id);

        // Update the media
        $media->name = $request->input('name');
        $media->order_no = $request->input('order_no');
        $media->description = $request->input('description');
        $media->featured = $request->input('featured', 0);


         // Handle video upload
         if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = time() . '_' . $video->getClientOriginalName();
            $video->move(public_path('uploads/media/videos'),$videoName);
        }
        $media->video = $videoName;
        $media->save();

        return redirect()->route('admin.listmedia')->with('success', 'Media updated successfully.');
    }

    public function delete($id)
    {
        $media = Media::findOrFail($id);
        $media->delete();

        return redirect()->route('admin.listmedia')->with('success', 'Media deleted successfully.');
    }
}
