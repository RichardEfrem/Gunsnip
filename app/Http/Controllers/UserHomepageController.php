<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Gunpla;
use Illuminate\Http\Request;

class UserHomepageController extends Controller
{
    public function index()
    {
        $banners = Banner::get();

        // // Get the 5 newest Gunpla based on release_date
        // $gunplanew = Gunpla::with('GunplaImage')->orderBy('release_date', 'desc') // Sort by newest release date
        //                     ->take(5) // Limit to 5 results
        //                     ->get();

        // // Get the 5 Gunpla with the most sales
        // $gunplatop = Gunpla::with('GunplaImage')->orderBy('totalSales', 'desc') // Sort by highest sales
        //                     ->take(5) // Limit to 5 results
        //                     ->get();

         // Get the 5 newest Gunpla with only the first image
    $gunplanew = Gunpla::with(['GunplaImage' => function ($query) {
        $query->orderBy('id', 'asc');// Fetch only the first image
    }], 'series')
    ->orderBy('release_date', 'desc')
    ->take(5)
    ->get();

// Get the 5 Gunpla with the most sales and only the first image
$gunplatop = Gunpla::with(['GunplaImage' => function ($query) {
        $query->orderBy('id', 'asc'); // Fetch only the first image
    }])
    ->orderBy('totalSales', 'desc')
    ->take(5)
    ->get();

        return view('User/beli-home')->with('banners', $banners)->with('gunplanew', $gunplanew)->with('gunplatop', $gunplatop);
    }
}
