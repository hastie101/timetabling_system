@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Course</h1>
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="CourseName">Name</label>
                <input type="text" name="CourseName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Credits">Credits</label>
                <input type="number" name="Credits" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Course</button>
        </form>
    </div>
@endsection
