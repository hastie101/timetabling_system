@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Class Schedule</h1>
        <form action="{{ route('class-schedules.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="ClassID">Class ID</label>
                <input type="number" name="ClassID" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="CourseID">Course ID</label>
                <input type="number" name="CourseID" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="TimeSlot">Time Slot</label>
                <input type="time" name="TimeSlot" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Schedule</button>
        </form>
    </div>
@endsection
