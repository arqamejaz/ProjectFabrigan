<?php

namespace App\Http\Controllers\Backend;

use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccessoryController extends Controller
{
    public function index()
    {
        // Retrieve accessories ordered by order_no
        $accessories = Accessory::orderBy('order_no', 'asc')->get();

        return view('backend.accessory.listAccessories', compact('accessories'));
    }
    public function Addnew()
    {
        return view('backend.accessory.addAccessory');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'order_no' => 'required|integer',
            'description' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Create and save the accessory
        $accessory = new Accessory();
        $accessory->name = $request->input('name');
        $accessory->order_no = $request->input('order_no');
        $accessory->description = $request->input('description');

        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('uploads/accessories'), $imageName);
                $imagePaths[] = $imageName;
            }
            $accessory->images = implode(',', $imagePaths);
        }
        $accessory->save();

        return redirect()->route('admin.listaccessories')->with('success', 'Accessory added successfully.');
    }

    public function edit($id)
    {
        $accessory = Accessory::findOrFail($id);
        return view('backend.accessory.editAccessory', compact('accessory'));
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

        // Find the accessory
        $accessory = Accessory::findOrFail($id);

        // Update the accessory
        $accessory->name = $request->input('name');
        $accessory->description = $request->input('description');
        $accessory->order_no = $request->input('order_no');

        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('uploads/accessories'), $imageName);
                $imagePaths[] = $imageName;
            }
            $accessory->images = implode(',', $imagePaths);
        }

        $accessory->save();

        return redirect()->route('admin.listaccessories')->with('success', 'Accessory updated successfully.');
    }

    public function delete($id)
    {
        $accessory = Accessory::findOrFail($id);
        $accessory->delete();

        return redirect()->route('admin.listaccessories')->with('success', 'Accessory deleted successfully.');
    }
}
