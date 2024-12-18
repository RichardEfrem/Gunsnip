<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Gunpla;
use App\Models\Series;
use App\Models\GunplaImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Gunpla::query()->with(['series', 'grade']); 

        if ($request->has('search') && $request->input('search') !== '') {
            $search = $request->input('search');
            $query->where(function ($query) use ($search) {
                $query->where('name', 'like', "%$search%")
                    ->orWhere('description', 'like', "%$search%")
                    ->orWhere('price', 'like', "%$search%")
                    ->orWhere('release_date', 'like', "%$search%")
                    ->orWhere('totalStock', 'like', "%$search%")
                    ->orWhere('totalSales', 'like', "%$search%")
                    ->orWhereHas('series', function ($query) use ($search) {
                        $query->where('name', 'like', "%$search%"); 
                    })
                    ->orWhereHas('grade', function ($query) use ($search) {
                        $query->where('grade_name', 'like', "%$search%"); 
                    });
            });
        }

        // Grade Filter
        if ($request->filled('grade')) {
            $query->where('grade_id', $request->input('grade'));
        }

        // Release Date Filter
        if ($request->filled('release_date')) {
            $query->whereDate('release_date', '=', $request->input('release_date'));
        }

        // Price Range Filter
        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->input('price_min'));
        }
        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->input('price_max'));
        }

        // Total Stock Range Filter
        if ($request->filled('stock_min')) {
            $query->where('totalStock', '>=', $request->input('stock_min'));
        }

        $grades = Grade::all();

        $gunplas = $query->paginate(5);
        return view('admin/product', ['gunplas' => $gunplas, 'search' => $request->input('search'), 'grades' => $grades]);
    }

    public function openAdd()
    {
        $grades = Grade::all(); // Fetch all grades
        $series = Series::all(); // Fetch all series

        return view('admin/addeditproduct', ['gunpla' => null], compact('grades', 'series'));
    }

    public function openEdit($gunplaid)
    {
        $gunpla = Gunpla::where('id', $gunplaid)->first();
        $grades = Grade::all(); // Fetch all grades
        $series = Series::all(); // Fetch all series

        return view('admin/addeditproduct', ['gunpla' => $gunpla], compact('grades', 'series'));
    }

    public function addGunpla(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'price' => 'required|numeric|min:0',
            'release_date' => 'required|date',
            'totalStock' => 'required|integer|min:0',
            'series_id' => 'required|exists:series,id',
            'grade_id' => 'required|exists:grade,id',
        ]);

        // Create a new Gunpla record
        Gunpla::create($validated);

        // Redirect to the product list with success message
        return redirect()->route('product.index')->with('success', 'Product added successfully!');
    }


    public function deleteGunpla($gunplaid)
    {
        $gunpla = Gunpla::findOrFail($gunplaid);

        $gunpla->delete();

        return redirect()->route('product.index')->with('success', 'Gundam successfully deleted!');
    }

    public function editGunpla(Request $request, $gunplaid)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:800',
            'price' => 'required|numeric|min:0',
            'release_date' => 'required|date',
            'totalStock' => 'required|integer|min:0',
            'series_id' => 'required|exists:series,id',
            'grade_id' => 'required|exists:grade,id',
        ]);

        $gunpla = Gunpla::findOrFail($gunplaid);

        $gunpla->name = $validatedData['name'];
        $gunpla->description = $validatedData['description'];
        $gunpla->price = $validatedData['price'];
        $gunpla->release_date = $validatedData['release_date'];
        $gunpla->totalStock = $validatedData['totalStock'];
        $gunpla->series_id = $validatedData['series_id'];
        $gunpla->grade_id = $validatedData['grade_id'];
       
        $gunpla->save();

        return redirect()->route('product.index')->with('success', 'Gunpla updated successfully!');
    }

    public function openPicture($gunplaid)
    {
        
        $gunpla = Gunpla::findOrFail($gunplaid);

        $pictures = GunplaImage::where('gunpla_id', $gunpla->id)->get();

        return view('admin/productpic', ['gunpla' => $gunpla, 'pictures' => $pictures]);
    }

    public function uploadPicture(Request $request, $gunplaid)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate file type and size
        ]);

        // Find the Gunpla record
        $gunpla = Gunpla::findOrFail($gunplaid);

        // Handle the file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            
            // Generate a unique file name
            $fileName = time() . '_' . $file->getClientOriginalName();
            
            // Move the file to the 'public/gunplaimage' directory
            $filePath = $file->storeAs('gunplaimage', $fileName, 'public');
            
            // Save the file path in the database
            GunplaImage::create([
                'gunpla_id' => $gunpla->id,
                'image_path' => 'storage/' . $filePath,
                'name' => $fileName,
            ]);

            // Redirect back with success message
            return redirect()->route('gunplapicture.open', $gunpla->id)
                            ->with('success', 'Picture uploaded successfully!');
        }

        // Redirect back with error message if file not uploaded
        return redirect()->route('gunplapicture.open', $gunpla->id)
                        ->with('error', 'Failed to upload picture.');
    }

    public function deletePicture($gunplaid, $imageid)
    {
        // Find the Gunpla by ID
        $gunpla = Gunpla::findOrFail($gunplaid);

        // Find the image by its path
        $image = GunplaImage::where('gunpla_id', $gunpla->id)
                            ->where('id', $imageid)
                            ->firstOrFail();

        // Delete the image from storage
        if (Storage::exists($image->image_path)) {
            Storage::delete($image->image_path);
        }

        // Delete the image record from the database
        $image->delete();

        return redirect()->route('gunplapicture.open', $gunpla->id)
                        ->with('success', 'Picture deleted successfully!');
    }


   

}
