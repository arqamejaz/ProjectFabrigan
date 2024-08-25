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
    public function addnew()
    {
        return view('backend.product.addProduct');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'order_no' => 'required|integer',
            'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Create the product
        $product = new Product;
        $product->name = $request->input('name');
        $product->order_no = $request->input('order_no');

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Get the original name of the file, sanitize it by replacing spaces with underscores
            $imageName = time() . '-' . preg_replace('/\s+/', '_', $image->getClientOriginalName());

            // Move the file to the desired location
            $image->move(public_path('uploads/products'), $imageName);
            $product->image = $imageName;
        }
        $product->save();
        // Return a response (e.g., redirect with a success message)
        return redirect()->route('admin.listproducts')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.product.editProduct', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'order_no' => 'required|integer',
            'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Find the product
        $product = Product::findOrFail($id);

        // Create the product
        $product->name = $request->input('name');
        $product->order_no = $request->input('order_no');


        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Get the original name of the file, sanitize it by replacing spaces with underscores
            $imageName = time() . '-' . preg_replace('/\s+/', '_', $image->getClientOriginalName());

            // Move the file to the desired location
            $image->move(public_path('uploads/products'), $imageName);
            $product->image = $imageName;
        }
        $product->save();

        return redirect()->route('admin.listproducts')->with('success', 'Product updated successfully.');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.listproducts')->with('success', 'Product deleted successfully.');
    }
}
