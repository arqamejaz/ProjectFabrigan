<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contactus;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contactus::first();
        return view('backend.settings.contactus', compact('contact'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'contact_page_image' => 'nullable|image',
            'contact_information' => 'nullable|string',
            'address' => 'nullable|string',
            'phone_no' => 'nullable|string',
            'email' => 'nullable|string|email',
            'timing' => 'nullable|string',
            'days' => 'nullable|string',
            'map_link' => 'nullable|string',
        ]);

        $contact = Contactus::firstOrCreate([]);

        $contact->contact_information = $request->contact_information;
        $contact->address = $request->address;
        $contact->phone_no = $request->phone_no;
        $contact->email = $request->email;
        $contact->timing = $request->timing;
        $contact->days = $request->days;
        $contact->map_link = $request->map_link;

        if ($request->hasFile('contact_page_image')) {
            $contact->contact_page_image = $request->file('contact_page_image')->store('uploads', 'public');
        }

        $contact->save();

        return redirect()->back()->with('success', 'Contact Us page updated successfully.');
    }
}
