<?php

namespace App\Http\Controllers\Backend;

use Exception;
use App\Models\Media;
use Illuminate\Http\Request;
use Vimeo\Laravel\Facades\Vimeo;
use App\Http\Controllers\Controller;
use Vimeo\Exceptions\VimeoRequestException;

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
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:200000', // Validate video file type and size
        ]);

        // Find the media by ID
        $media = Media::findOrFail($id); // Assuming your model is named `Media`

        // Update media details
        $media->name = $request->input('name');
        $media->order_no = $request->input('order_no');
        $media->description = $request->input('description');
        $media->featured = $request->input('featured', 0);

        // Check if a new video file is uploaded
        if ($request->hasFile('video')) {
            // Delete the existing video from Vimeo if it exists
            if (!empty($media->video)) {
                try {
                    Vimeo::request("/videos/{$media->video}", [], 'DELETE');
                } catch (VimeoRequestException $e) {
                    return redirect()->back()->withErrors('Error deleting the existing video from Vimeo.');
                }
            }

            // Handle the new video upload to Vimeo
            $video = $request->file('video');
            $path = $video->getRealPath();

            // Upload the new video to Vimeo
            $response = Vimeo::upload($path, [
                'name' => $media->name,
                'description' => $media->description,
            ]);
            $videoId = explode('_', $response)[0]; // Extracts "1724152938"

            // Store the new Vimeo video ID in the database
            $media->video = $videoId;
        }

        // Save the updated media
        $media->save();

        return redirect()->route('admin.listmedia')->with('success', 'Media updated successfully.');
    }


    public function delete($id)
{
    // Find the media by ID
    $media = Media::findOrFail($id);

    // Check if the media has an associated Vimeo video
    if (!empty($media->video)) {
        try {
            // Delete the video from Vimeo using the Vimeo API
            Vimeo::request("/videos/{$media->video}", [], 'DELETE');
        } catch (VimeoRequestException $e) {
            return redirect()->route('admin.listmedia')->withErrors('Error deleting video from Vimeo: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->route('admin.listmedia')->withErrors('General error occurred: ' . $e->getMessage());
        }
    }

    // Delete the media from the database
    $media->delete();

    return redirect()->route('admin.listmedia')->with('success', 'Media deleted successfully.');
}

}
