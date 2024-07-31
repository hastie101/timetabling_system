<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Class;
use App\Models\Course;
use App\Models\ClassSchedule;
use App\Models\Instructor;

class TimetableController extends Controller
{
    public function index()
    {
        // Fetch the timetable data
        $schedules = ClassSchedule::with(['class', 'course', 'instructor'])
        ->orderBy('DayOfWeek')
        ->orderBy('TimeSlot')
        ->get();
        
        // Pass the data to the view
        return view('timetable.index', compact('schedules'));
    }
}
