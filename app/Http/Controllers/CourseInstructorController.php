<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseInstructor;

class CourseInstructorController extends Controller
{
    public function index()
    {
        $courseInstructors = CourseInstructor::all();
        return view('course_instructors.index', compact('courseInstructors'));
    }

    public function create()
    {
        return view('course_instructors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'CourseID' => 'required|exists:courses,CourseID',
            'InstructorID' => 'required|exists:instructors,InstructorID',
        ]);

        CourseInstructor::create($request->all());

        return redirect()->route('course_instructors.index')
                         ->with('success', 'Course instructor assigned successfully.');
    }

    public function show($id)
    {
        $courseInstructor = CourseInstructor::find($id);
        return view('course_instructors.show', compact('courseInstructor'));
    }

    public function edit($id)
    {
        $courseInstructor = CourseInstructor::find($id);
        return view('course_instructors.edit', compact('courseInstructor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'CourseID' => 'required|exists:courses,CourseID',
            'InstructorID' => 'required|exists:instructors,InstructorID',
        ]);

        $courseInstructor = CourseInstructor::find($id);
        $courseInstructor->update($request->all());

        return redirect()->route('course_instructors.index')
                         ->with('success', 'Course instructor updated successfully.');
    }

    public function destroy($id)
    {
        $courseInstructor = CourseInstructor::find($id);
        $courseInstructor->delete();

        return redirect()->route('course_instructors.index')
                         ->with('success', 'Course instructor removed successfully.');
    }
}
