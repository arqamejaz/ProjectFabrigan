<?php

namespace App\Http\Controllers\Backend;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function index(){

        // Retrieve sliders ordered by order_no
        $sliders = Slider::orderBy('order_no', 'asc')->get();
        return view('backend.slider.listSliders', compact('sliders'));
    }
    public function Addnew(){
        return view('backend.slider.addSlider');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'order_no' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('uploads/sliders'), $imageName);

            // Create a new slider record
            $slider = new Slider();
            $slider->order_no = $request->input('order_no');
            $slider->image = $imageName;
            $slider->save();
        }

        // Redirect with a success message
        return redirect()->route('admin.listSliders')->with('success', 'Slider added successfully.');
    }

    public function delete($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();

        return redirect()->route('admin.listSliders')->with('success', 'Category deleted successfully.');
    }
}
