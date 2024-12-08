<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::get();
        return view('admin/grade')->with('grades', $grades);
    }

    public function openAdd()
    {
        return view('admin/addgrade');
    }

    public function submitGrade(Request $request)
    {
        $validatedData = $request->validate([
            'grade_name' => 'required|string|max:255',
        ]);

        Grade::create([
            'grade_name' => $validatedData['grade_name']
        ]);

        return redirect()->route('grade.index')->with('success', 'Grade added successfully!');
    }

    public function deleteGrade($gradeid)
    {
        $grade = Grade::findOrFail($gradeid);

        $grade->delete();

        return redirect()->route('grade.index')->with('success', 'User deleted successfully!');
    }
}
