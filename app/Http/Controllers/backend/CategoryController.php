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
    public function Addnew()
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
            'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Create and save the category
        $category = new Category();
        $category->name = $request->input('name');
        $category->order_no = $request->input('order_no');
        $category->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('uploads/categories'), $imageName);
            $category->image = $imageName;
        }

        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('uploads/categories/'), $imageName);
                $imagePaths[] = $imageName;
            }
            $category->images = implode(',', $imagePaths);
        }
        $category->save();

        return redirect()->route('admin.listCategories')->with('success', 'Category added successfully.');
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
            'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Find the category
        $category = category::findOrFail($id);

        // Update the category
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->order_no = $request->input('order_no');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('uploads/categories'), $imageName);
            $category->image = $imageName;
        }
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('uploads/categories'), $imageName);
                $imagePaths[] = $imageName;
            }
            $category->images = implode(',', $imagePaths);
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
