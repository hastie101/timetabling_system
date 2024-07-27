@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Class Schedule</h1>
        <form action="{{ route('class-schedules.update', [$schedule->ClassID, $schedule->CourseID, $schedule->TimeSlot]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="ClassID">Class ID</label>
                <input type="number" name="ClassID" class="form-control" value="{{ $schedule->ClassID }}" required>
            </div>
            <div class="form-group">
                <label for="CourseID">Course ID</label>
                <input type="number" name="CourseID" class="form-control" value="{{ $schedule->CourseID }}" required>
            </div>
            <div class="form-group">
                <label for="TimeSlot">Time Slot</label>
                <input type="time" name="TimeSlot" class="form-control" value="{{ $schedule->TimeSlot }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Schedule</button>
        </form>
    </div>
@endsection
