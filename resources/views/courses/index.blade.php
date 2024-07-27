@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Courses</h1>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">Add Course</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Credits</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->CourseID }}</td>
                        <td>{{ $course->CourseName }}</td>
                        <td>{{ $course->Credits }}</td>
                        <td>
                            <a href="{{ route('courses.show', $course->CourseID) }}" class="btn btn-info">View</a>
                            <a href="{{ route('courses.edit', $course->CourseID) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('courses.destroy', $course->CourseID) }}" method="POST" style="display:inline;">
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
