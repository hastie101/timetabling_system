@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1>Timetable</h1>
    <table>
        <thead>
            <tr>
                <th>Day</th>
                <th>Class Name</th>
                <th>Course Name</th>
                <th>Time Slot</th>
                <th>Instructor</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->DayOfWeek }}</td>
                    <td>{{ $schedule->class->ClassName }}</td>
                    <td>{{ $schedule->course->CourseName }}</td>
                    <td>{{ $schedule->TimeSlot }}</td>
                    <td>{{ $schedule->instructor->InstructorName }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center;">No schedules available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
