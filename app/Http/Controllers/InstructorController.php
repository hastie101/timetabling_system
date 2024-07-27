<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;

class InstructorController extends Controller
{
    public function index()
    {
        $instructors = Instructor::all();
        return view('instructors.index', compact('instructors'));
    }

    public function create()
    {
        return view('instructors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'InstructorName' => 'required|string|max:255',
        ]);

        Instructor::create($request->all());

        return redirect()->route('instructors.index')
                         ->with('success', 'Instructor created successfully.');
    }

    public function show($id)
    {
        $instructor = Instructor::find($id);
        return view('instructors.show', compact('instructor'));
    }

    public function edit($id)
    {
        $instructor = Instructor::find($id);
        return view('instructors.edit', compact('instructor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'InstructorName' => 'required|string|max:255',
        ]);

        $instructor = Instructor::find($id);
        $instructor->update($request->all());

        return redirect()->route('instructors.index')
                         ->with('success', 'Instructor updated successfully.');
    }

    public function destroy($id)
    {
        $instructor = Instructor::find($id);
        $instructor->delete();

        return redirect()->route('instructors.index')
                         ->with('success', 'Instructor deleted successfully.');
    }
}
