@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Course Details</h1>
        <p><strong>ID:</strong> {{ $course->CourseID }}</p>
        <p><strong>Name:</strong> {{ $course->CourseName }}</p>
        <p><strong>Credits:</strong> {{ $course->Credits }}</p>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection

