@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Class Schedule Details</h1>
        <p><strong>Class ID:</strong> {{ $schedule->ClassID }}</p>
        <p><strong>Course ID:</strong> {{ $schedule->CourseID }}</p>
        <p><strong>Time Slot:</strong> {{ $schedule->TimeSlot }}</p>
        <a href="{{ route('class-schedules.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
