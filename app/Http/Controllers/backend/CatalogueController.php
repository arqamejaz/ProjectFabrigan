<?php

namespace App\Http\Controllers\Backend;

use App\Models\Catalogue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatalogueController extends Controller
{
    public function index()
    {
        $catalogues = Catalogue::orderBy('order_no', 'asc')->get();

        return view('backend.catalogue.listCatalogues', compact('catalogues'));
    }
    public function addnew()
    {
        return view('backend.catalogue.addCatalogue');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'order_no' => 'required|integer',
            'file' => 'required|file|mimes:pdf|max:20480', // Validates that the file is a PDF and has a max size of 20MB
        ]);

        // Handle the file upload
        if ($request->hasFile('file')) {
            // Get the uploaded file
            $file = $request->file('file');

            // Generate a unique file name with the current timestamp
            $fileName = time() . '-' . $file->getClientOriginalName();

            // Move the file to the public/pdfs directory
            $file->move(public_path('uploads/catalogues'), $fileName);

            // Create a new catalogue record
            $catalogue = new Catalogue();
            $catalogue->name = $request->input('name');
            $catalogue->order_no = $request->input('order_no');
            $catalogue->file_path = $fileName; // Store the file name in the database
            $catalogue->save();

            return redirect()->route('admin.listcatalogues')->with('success', 'Catalogue added successfully.');
        }

        return redirect()->back()->with('error', 'Failed to upload the file.');
    }
    public function delete(Request $request, $id)
    {
        // Find the catalogue by its ID
        $catalogue = Catalogue::findOrFail($id);
        // Delete the PDF file from storage
        if ($catalogue->file_path && file_exists(public_path('uploads/catalogues/' . $catalogue->file_path))) {
            unlink(public_path('uploads/catalogues/' . $catalogue->file_path));
        }
        // Delete the catalogue record from the database
        $catalogue->delete();
        // Redirect with a success message
        return redirect()->route('admin.listcatalogues')
            ->with('success', 'Catalogue deleted successfully.');
    }
}
