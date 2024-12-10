<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $query = Series::query();
        if ($request->has('search') && $request->input('search') !== '') {
            $search = $request->input('search');
            $query->where(function($query) use ($search) {
                $query->where('name', 'like', "%$search%")
                      ->orWhere('series_description', 'like', "%$search%");
            });
        }
        

        $series = $query->paginate(4);
        return view('admin/series', ['series' => $series, 'search' => $request->input('search')]);
    }

    public function openAdd()
    {
        return view('admin/addeditseries', ['series' => null]);
    }

    public function openEdit($seriesid)
    {
        $series = Series::where('id', $seriesid)->first();
        return view('admin/addeditseries')->with('series', $series);
    }

    public function addSeries(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        // Save the user
        Series::create([
            'name' => $validatedData['name'],
            'series_description' => $validatedData['description']
        ]);

        // Redirect with success message
        return redirect()->route('series.index')->with('success', 'Series added successfully!');
    }

    public function editSeries(Request $request, $seriesid)
    {
        $validatedData = $request->validate([
           'name' => 'required|string|max:255',
           'description' => 'required|string'
        ]);

        $series = Series::findOrFail($seriesid);

        $series->name = $validatedData['name'];
        $series->series_description = $validatedData['description'];

        $series->save();

        return redirect()->route('series.index')->with('success', 'Series successfully edited!');
    }

    public function deleteSeries($seriesid)
    {
        $series = Series::findOrFail($seriesid);

        $series->delete();

        return redirect()->route('series.index')->with('success', 'Series successfully deleted!');
    }

    
}
