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

    public function filterByGrade($grade)
    {
        // Fetch the grade ID based on the grade name
        $gradeRecord = Grade::where('grade_name', $grade)->first();

        // If the grade doesn't exist, return to the product page with an error message
        if (!$gradeRecord) {
            return redirect()->route('User.product-search')->with('error', 'Grade not found.');
        }

        // Query Gunpla by the grade ID
        $gunpla = Gunpla::with(['GunplaImage' => function ($query) {
            $query->orderBy('id', 'asc'); // Fetch only the first image
        }, 'series'])->where('grade_id', $gradeRecord->id)->paginate(12);

        // Fetch all grades and series for the filters
        $grades = Grade::get();
        $series = Series::get();

        // Return the view with the filtered Gunpla
        return view('User/product-search')
            ->with('gunpla', $gunpla)
            ->with('grades', $grades)
            ->with('series', $series)
            ->with('selectedGrade', $grade);
    }

    public function search(Request $request)
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

        // Get the filtered Gunpla records
        $gunpla = $query->paginate(12);

        // Fetch grades, series, and other necessary data for the filters
        $grades = Grade::get();
        $series = Series::get();

        // Return the view with the filtered data
        return view('User/product-search')
            ->with('gunpla', $gunpla)
            ->with('grades', $grades)
            ->with('series', $series);
    }

}
