<?php

namespace App\Http\Controllers\backend;

use App\Models\WhyChooseUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WhyChooseUsController extends Controller
{
    public function index()
    {
        $wcu = WhyChooseUs::orderBy('order_no', 'asc')->get();

        return view('backend.whychooseus.listwcu', compact('wcu'));
    }

    public function addnew()
    {
        return view('backend.whychooseus.addwcu');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'order_no' => 'required|integer',
            'ImageText' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Create a new WhyChooseUs instance
        $whyChooseUs = new WhyChooseUs();
        $whyChooseUs->order_no = $request->input('order_no');
        $whyChooseUs->image_text = $request->input('ImageText');

        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/whychooseus'), $imageName);
            $whyChooseUs->image = $imageName;
        }

        // Save the data to the database
        $whyChooseUs->save();

        // Redirect to a specific route with a success message
        return redirect()->route('admin.listwhychooseus')->with('success', 'Why Choose Us  added successfully.');
    }

    public function edit($id)
    {
        $wcu = WhyChooseUs::findOrFail($id);
        return view('backend.whychooseus.editwcu', compact('wcu'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'order_no' => 'required|integer',
            'ImageText' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Find the existing WhyChooseUs entry
        $whyChooseUs = WhyChooseUs::findOrFail($id);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($whyChooseUs->image && file_exists(public_path('uploads/whychooseus/' . $whyChooseUs->image))) {
                unlink(public_path('uploads/whychooseus/' . $whyChooseUs->image));
            }

            // Upload the new image
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/whychooseus'), $imageName);

            // Update the image field
            $whyChooseUs->image = $imageName;
        }

        // Update the other fields
        $whyChooseUs->order_no = $validatedData['order_no'];
        $whyChooseUs->image_text = $validatedData['ImageText'];

        // Save the updated WhyChooseUs entry
        $whyChooseUs->save();

        return redirect()->route('admin.listwhychooseus')->with('success', 'Why Choose Us entry updated successfully.');
    }

    public function delete($id)
    {
        // Find the WhyChooseUs entry
        $whyChooseUs = WhyChooseUs::findOrFail($id);

        // Delete the image file if it exists
        if ($whyChooseUs->image && file_exists(public_path('uploads/whychooseus/' . $whyChooseUs->image))) {
            unlink(public_path('uploads/whychooseus/' . $whyChooseUs->image));
        }

        // Delete the WhyChooseUs entry
        $whyChooseUs->delete();

        // Redirect back with a success message
        return redirect()->route('admin.listwhychooseus')->with('success', 'Why Choose Us entry deleted successfully.');
    }
}
