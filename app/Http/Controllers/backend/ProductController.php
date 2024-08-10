<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        // Retrieve Products ordered by order_no
        $products = Product::orderBy('order_no', 'asc')->get();

        return view('backend.product.listProducts', compact('products'));
    }
    public function Addnew()
    {
        $categories = Category::all(['id', 'name']);
        $accessories = Accessory::all(['id', 'name']);
        return view('backend.product.addProduct', compact('categories', 'accessories'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'order_no' => 'required|integer',
            'type' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
            'accessory_id' => 'nullable|exists:accessories,id',
            'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'images.*' => 'nullable|image|mimes:jpg,png,jpeg,gif,webp|max:2048',
        ]);

        // Handle file uploads
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('uploads/products'), $imageName);
                $imagePaths[] = $imageName;
            }
        }

        // Create the product
        $product = Product::create([
            'name' => $request->input('name'),
            'order_no' => $request->input('order_no'),
            'type' => $request->input('type'),
            'category_id' => $request->input('type') == 'category' ? $request->input('category_id') : null,
            'accessory_id' => $request->input('type') == 'accessory' ? $request->input('accessory_id') : null,
            'images' => implode(',', $imagePaths),
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('uploads/products'), $imageName);
            $product->image = $imageName;
        }
        $product->save();
        // Return a response (e.g., redirect with a success message)
        return redirect()->route('admin.listProducts')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {

        $categories = Category::all(['id', 'name']);
        $accessories = Accessory::all(['id', 'name']);
        $product = Product::findOrFail($id);
        return view('backend.product.editProduct', compact('product', 'categories', 'accessories'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'order_no' => 'required|integer',
            'type' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
            'accessory_id' => 'nullable|exists:accessories,id',
            'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'images.*' => 'nullable|image|mimes:jpg,png,jpeg,gif,webp|max:2048',
        ]);

        // Find the product
        $product = Product::findOrFail($id);

        // Handle file uploads
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('uploads/products'), $imageName);
                $imagePaths[] = $imageName;
            }
        }
        // update the product
        $product->name = $request->input('name');
        $product->order_no = $request->input('order_no');
        $product->type = $request->input('type');
        $product->category_id = $request->input('type') == 'category' ? $request->input('category_id') : null;
        $product->accessory_id = $request->input('type') == 'accessory' ? $request->input('accessory_id') : null;
        // Only update the images field if new images are uploaded
        if ($request->hasFile('uploads/products')) {
            $product->images = implode(',', $imagePaths);
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('uploads/products'), $imageName);
            $product->image = $imageName;
        }
        $product->save();

        return redirect()->route('admin.listProducts')->with('success', 'Product updated successfully.');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.listProducts')->with('success', 'Product deleted successfully.');
    }
}
