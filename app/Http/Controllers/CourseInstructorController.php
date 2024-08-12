<?php

namespace App\Http\Controllers;

use DB;
use Log;
use App\Models\Course;
use App\Models\Instructor;
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
        $courses = Course::all();
        $instructors = Instructor::all();

        return view('course_instructors.create', compact('courses', 'instructors'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'CourseID' => 'required|exists:courses,CourseID',
            'InstructorID' => 'required|exists:instructors,InstructorID',
        ]);

        try {
            // Attempt to create the CourseInstructor record
            CourseInstructor::create($validatedData);

            return redirect()->route('course_instructors.index')
                ->with('success', 'Course instructor assigned successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withErrors('An error occurred while assigning the course instructor. Please try again.');
        }
    }



    public function show($id)
    {
        $courseInstructor = CourseInstructor::findOrFail($id);
        return view('course_instructors.show', compact('courseInstructor'));
    }

    public function edit($id)
    {
        $courseInstructor = CourseInstructor::findOrFail($id);
        return view('course_instructors.edit', compact('courseInstructor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'CourseID' => 'required|exists:courses,CourseID',
            'InstructorID' => 'required|exists:instructors,InstructorID',
        ]);

        $courseInstructor = CourseInstructor::findOrFail($id);
        $courseInstructor->update($request->all());

        return redirect()->route('course_instructors.index')
            ->with('success', 'Course instructor updated successfully.');
    }

    public function destroy($id)
    {
        $courseInstructor = CourseInstructor::findOrFail($id);
        $courseInstructor->delete();

        return redirect()->route('course_instructors.index')
            ->with('success', 'Course instructor removed successfully.');
    }
}
