<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminBannerController extends Controller
{
    //

    public function index(){
        $banners = Banner::get();

        return view('admin/bannercontroller')->with('banners', $banners);
    }

    public function addBanner(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate file type and size
        ]);

        // Handle the file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            
            // Generate a unique file name
            $fileName = time() . '_' . $file->getClientOriginalName();
            
            // Move the file to the 'public/gunplaimage' directory
            $filePath = $file->storeAs('banner', $fileName, 'public');
            
            // Save the file path in the database
            Banner::create([
                'imagepath' => 'storage/' . $filePath,
            ]);

            // Redirect back with success message
            return redirect()->route('bannercontroller.index')->with('success', 'Picture uploaded successfully!');
        }

        // Redirect back with error message if file not uploaded
        return redirect()->route('bannercontroller.index')->with('error', 'Failed to upload picture.');
    }

    public function deleteBanner($id)
    {

        // Find the image by its path
        $banner = Banner::where('id', $id)->firstOrFail();

        // Delete the image from storage
        if (Storage::exists($banner->imagepath)) {
            Storage::delete($banner->imagepath);
        }

        // Delete the image record from the database
        $banner->delete();

        return redirect()->route('bannercontroller.index')->with('success', 'Picture deleted successfully!');
    }
}
