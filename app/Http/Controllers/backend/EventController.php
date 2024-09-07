<?php

namespace App\Http\Controllers\Backend;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        // Retrieve events ordered by order_no
        $events = Event::orderBy('order_no', 'asc')->get();

        return view('backend.event.listEvents', compact('events'));
    }
    public function addnew()
    {
        return view('backend.event.addEvent');
    }

    public function store(Request $request)
{
    // Validate the request
    $validatedData = $request->validate([
        'date' => 'required|date',
        'location' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'order_no' => 'required|integer',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',

    ]);

    // Create and save the event
    $event = new Event();
    $event->date = $request->input('date');
    $event->description = $request->input('description');
    $event->location = $request->input('location');
    $event->order_no = $request->input('order_no');

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '-' . $image->getClientOriginalName();
        $image->move(public_path('uploads/events'), $imageName);
        $event->image = $imageName;
    }

    $event->save();

    return redirect()->route('admin.listevents')->with('success', 'Event added successfully.');
}
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('backend.event.editEvent', compact('event'));
    }

    public function update(Request $request, $id)
{
    // Validate the request
    $validatedData = $request->validate([
        'date' => 'required|date',
        'location' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'order_no' => 'required|integer',
    ]);

    // Find the event
    $event = Event::findOrFail($id);
    $event->date = $request->input('date');
    $event->location = $request->input('location');
    $event->order_no = $request->input('order_no');
    // Handle image upload
    if ($request->hasFile('image')) {
        // Delete the old image if exists
        if ($event->image && file_exists(public_path('uploads/events/' . $event->image))) {
            unlink(public_path('uploads/events/' . $event->image));
        }

        // Upload the new image
        $image = $request->file('image');
        $imageName = time() . '-' . $image->getClientOriginalName();
        $image->move(public_path('uploads/events'), $imageName);
        $event->image = $imageName;
    }
    // Save the updated event
    $event->save();

    return redirect()->route('admin.listevents')->with('success', 'Event updated successfully.');
}

    public function delete($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('admin.listevents')->with('success', 'Event deleted successfully.');
    }
}
