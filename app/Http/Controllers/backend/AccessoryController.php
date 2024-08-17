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
            'serviceImages.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Note the `.*` to handle multiple files
            'sliderImages.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Create and save the accessory
        $accessory = new Accessory();
        $accessory->name = $request->input('name');
        $accessory->order_no = $request->input('order_no');
        $accessory->description = $request->input('description');

        // Handle serviceImages upload
        if ($request->hasFile('serviceImages')) {
            $serviceImagePaths = [];
            foreach ($request->file('serviceImages') as $serviceImage) {
                $serviceImageName = time() . '-' . $serviceImage->getClientOriginalName();
                $serviceImage->move(public_path('uploads/accessories/serviceImages'), $serviceImageName);
                $serviceImagePaths[] = $serviceImageName;
            }
            $accessory->serviceImages = implode(',', $serviceImagePaths); // Save as a comma-separated string
        }

        // Handle images upload
        if ($request->hasFile('sliderImages')) {
            $imagePaths = [];
            foreach ($request->file('sliderImages') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('uploads/accessories'), $imageName);
                $imagePaths[] = $imageName;
            }
            $accessory->sliderImages = implode(',', $imagePaths); // Save as a comma-separated string
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
            'serviceImages.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sliderImages.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Find the accessory
        $accessory = Accessory::findOrFail($id);

        // Update the accessory
        $accessory->name = $request->input('name');
        $accessory->description = $request->input('description');
        $accessory->order_no = $request->input('order_no');

         // Handle serviceImages upload
         if ($request->hasFile('serviceImages')) {
            $serviceImagePaths = [];
            foreach ($request->file('serviceImages') as $serviceImage) {
                $serviceImageName = time() . '-' . $serviceImage->getClientOriginalName();
                $serviceImage->move(public_path('uploads/accessories/serviceImages'), $serviceImageName);
                $serviceImagePaths[] = $serviceImageName;
            }
            $accessory->serviceImages = implode(',', $serviceImagePaths); // Save as a comma-separated string
        }

        // Handle sliderImages upload
        if ($request->hasFile('sliderImages')) {
            $imagePaths = [];
            foreach ($request->file('sliderImages') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('uploads/accessories/sliderImages'), $imageName);
                $imagePaths[] = $imageName;
            }
            $accessory->sliderImages = implode(',', $imagePaths);
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
