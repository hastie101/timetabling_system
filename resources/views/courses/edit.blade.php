@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Course</h1>
        <form action="{{ route('courses.update', $course->CourseID) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="CourseName">Name</label>
                <input type="text" name="CourseName" class="form-control" value="{{ $course->CourseName }}" required>
            </div>
            <div class="form-group">
                <label for="Credits">Credits</label>
                <input type="number" name="Credits" class="form-control" value="{{ $course->Credits }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Course</button>
        </form>
    </div>
@endsection
