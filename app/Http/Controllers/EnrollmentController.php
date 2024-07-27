<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::all();
        return view('enrollments.index', compact('enrollments'));
    }

    public function create()
    {
        return view('enrollments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'StudentID' => 'required|exists:students,StudentID',
            'ClassID' => 'required|exists:classes,ClassID',
        ]);

        Enrollment::create($request->all());

        return redirect()->route('enrollments.index')
                         ->with('success', 'Enrollment created successfully.');
    }

    public function show($id)
    {
        $enrollment = Enrollment::find($id);
        return view('enrollments.show', compact('enrollment'));
    }

    public function edit($id)
    {
        $enrollment = Enrollment::find($id);
        return view('enrollments.edit', compact('enrollment'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'StudentID' => 'required|exists:students,StudentID',
            'ClassID' => 'required|exists:classes,ClassID',
        ]);

        $enrollment = Enrollment::find($id);
        $enrollment->update($request->all());

        return redirect()->route('enrollments.index')
                         ->with('success', 'Enrollment updated successfully.');
    }

    public function destroy($id)
    {
        $enrollment = Enrollment::find($id);
        $enrollment->delete();

        return redirect()->route('enrollments.index')
                         ->with('success', 'Enrollment deleted successfully.');
    }
}
