<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassSchedule;

class ClassScheduleController extends Controller
{
    public function index()
    {
        $schedules = ClassSchedule::all();
        return view('class_schedules.index', compact('schedules'));
    }

    public function create()
    {
        return view('class_schedules.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ClassID' => 'required|exists:classes,ClassID',
            'CourseID' => 'required|exists:courses,CourseID',
            'TimeSlot' => 'required|date_format:H:i:s',
        ]);

        ClassSchedule::create($request->all());

        return redirect()->route('class-schedules.index')
                         ->with('success', 'Class schedule created successfully.');
    }

    public function show($id)
    {
        $schedule = ClassSchedule::find($id);
        return view('class_schedules.show', compact('schedule'));
    }

    public function edit($id)
    {
        $schedule = ClassSchedule::find($id);
        return view('class_schedules.edit', compact('schedule'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ClassID' => 'required|exists:classes,ClassID',
            'CourseID' => 'required|exists:courses,CourseID',
            'TimeSlot' => 'required|date_format:H:i:s',
        ]);

        $schedule = ClassSchedule::find($id);
        $schedule->update($request->all());

        return redirect()->route('class-schedules.index')
                         ->with('success', 'Class schedule updated successfully.');
    }

    public function destroy($id)
    {
        $schedule = ClassSchedule::find($id);
        $schedule->delete();

        return redirect()->route('class-schedules.index')
                         ->with('success', 'Class schedule deleted successfully.');
    }
}
