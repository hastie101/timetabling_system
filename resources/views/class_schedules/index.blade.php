@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Class Schedules</h1>
        <a href="{{ route('class-schedules.create') }}" class="btn btn-primary">Add Schedule</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Class ID</th>
                    <th>Course ID</th>
                    <th>Time Slot</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schedules as $schedule)
                    <tr>
                        <td>{{ $schedule->ClassID }}</td>
                        <td>{{ $schedule->CourseID }}</td>
                        <td>{{ $schedule->TimeSlot }}</td>
                        <td>
                            <a href="{{ route('class-schedules.show', [$schedule->ClassID, $schedule->CourseID, $schedule->TimeSlot]) }}" class="btn btn-info">View</a>
                            <a href="{{ route('class-schedules.edit', [$schedule->ClassID, $schedule->CourseID, $schedule->TimeSlot]) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('class-schedules.destroy', [$schedule->ClassID, $schedule->CourseID, $schedule->TimeSlot]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
