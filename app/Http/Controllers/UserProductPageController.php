<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Gunpla;
use App\Models\Series;
use Illuminate\Http\Request;

class UserProductPageController extends Controller
{
    public function index()
    {
        $gunpla = Gunpla::with(['GunplaImage' => function ($query) {
            $query->orderBy('id', 'asc');// Fetch only the first image
        }],'series')->paginate(12);
        $grades = Grade::get();
        $series = Series::get();
        return view('User/product-search')->with('gunpla', $gunpla)->with('grades', $grades)->with('series', $series);
    }

    public function filter(Request $request)
    {
        // Retrieve selected grades and series from the request
        $selectedGrades = $request->input('grades', []);
        $selectedSeries = $request->input('series', []);

        // Build the query
        $query = Gunpla::with(['GunplaImage' => function ($query) {
            $query->orderBy('id', 'asc'); // Fetch only the first image
        }, 'series']);

        // Apply filters if values are selected
        if (!empty($selectedGrades)) {
            $query->whereIn('grade_id', $selectedGrades);
        }

        if (!empty($selectedSeries)) {
            $query->whereIn('series_id', $selectedSeries);
        }

        // Get filtered Gunpla records
        $gunpla = $query->paginate(12);

        // Fetch grades and series for the filters
        $grades = Grade::get();
        $series = Series::get();

        // Return the view with filtered data
        return view('User/product-search')->with('gunpla', $gunpla)->with('grades', $grades)->with('series', $series);
    }

}
