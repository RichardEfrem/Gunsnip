<?php

namespace App\Http\Controllers;

use App\Models\Gunpla;
use Illuminate\Http\Request;

class UserProductInfoController extends Controller
{
    public function index($id)
    {
        // Fetch the Gunpla with all related images and series data
        $gunpla = Gunpla::with('GunplaImage', 'series', 'grade')->find($id);

        // If the Gunpla doesn't exist, redirect to the product page with an error message
        if (!$gunpla) {
            return redirect()->route('productpage.index')->with('error', 'Gunpla not found.');
        }

         // Fetch random Gunpla items with the same grade or series
    $relatedGunplas = Gunpla::with(['GunplaImage' => function ($query) {
        $query->orderBy('id', 'asc'); // Fetch only the first image
    }, 'series'])
        ->where('id', '!=', $gunpla->id) // Exclude the current Gunpla
        ->where(function ($query) use ($gunpla) {
            $query->where('grade_id', $gunpla->grade_id)
                ->orWhere('series_id', $gunpla->series_id);
        })
        ->inRandomOrder() // Randomize the results
        ->take(4) // Limit to 4 random related items
        ->get();

        // Return the product-info view with the Gunpla data
        return view('User/product-info')->with('gunpla', $gunpla)->with('relatedGunplas', $relatedGunplas);
    }

}
