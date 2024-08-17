<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        // Retrieve categories ordered by order_no
        $categories = Category::orderBy('order_no', 'asc')->get();

        return view('backend.category.listCategories', compact('categories'));
    }
    public function addnew()
    {
        return view('backend.category.addCategory');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'order_no' => 'required|integer',
            'description' => 'nullable|string',
            'serviceImages.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sliderImages.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Create and save the category
        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->order_no = $request->input('order_no');

        // Handle serviceImages upload
         if ($request->hasFile('serviceImages')) {
            $serviceImagePaths = [];
            foreach ($request->file('serviceImages') as $serviceImage) {
                $serviceImageName = time() . '-' . $serviceImage->getClientOriginalName();
                $serviceImage->move(public_path('uploads/categories/serviceImages'), $serviceImageName);
                $serviceImagePaths[] = $serviceImageName;
            }
            $category->serviceImages = implode(',', $serviceImagePaths); // Save as a comma-separated string
        }

       // Handle sliderImages upload
       if ($request->hasFile('sliderImages')) {
        $imagePaths = [];
        foreach ($request->file('sliderImages') as $image) {
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('uploads/categories/sliderImages'), $imageName);
            $imagePaths[] = $imageName;
        }
        $category->sliderImages = implode(',', $imagePaths);
        }
        $category->save();

        return redirect()->route('admin.listcategories')->with('success', 'Category added successfully.');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.editCategory', compact('category'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'order_no' => 'required|integer',
            'serviceImage.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'serviceImages.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sliderImages.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Find the category
        $category = category::findOrFail($id);

        // Update the category
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->order_no = $request->input('order_no');
        $category->serviceImage= $request->input('serviceImage');

        // Handle serviceImages upload
        if ($request->hasFile('serviceImages')) {
            $serviceImagePaths = [];
            foreach ($request->file('serviceImages') as $serviceImage) {
                $serviceImageName = time() . '-' . $serviceImage->getClientOriginalName();
                $serviceImage->move(public_path('uploads/accessories/serviceImages'), $serviceImageName);
                $serviceImagePaths[] = $serviceImageName;
            }
            $category->serviceImages = implode(',', $serviceImagePaths); // Save as a comma-separated string
        }

        // Handle sliderImages upload
        if ($request->hasFile('sliderImages')) {
        $imagePaths = [];
        foreach ($request->file('sliderImages') as $image) {
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('uploads/accessories'), $imageName);
            $imagePaths[] = $imageName;
        }
        $category->sliderImages = implode(',', $imagePaths);
        }

        $category->save();

        return redirect()->route('admin.listCategories')->with('success', 'Category updated successfully.');
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.listCategories')->with('success', 'Category deleted successfully.');
    }
}
