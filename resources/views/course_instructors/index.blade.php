@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Course Instructors</h1>
        <a href="{{ route('course_instructors.create') }}" class="btn btn-primary">Add Course Instructor</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Serial Number</th>
                    <th>Course Name</th> 
                    <th>Instructor Name</th>  
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courseInstructors as $courseInstructor)
                    <tr>
                        <td>{{ $loop->iteration }}</td> <!-- This will generate a serial number -->
                        <td>{{ $courseInstructor->course->name }}</td>  <!-- Assuming course has a 'name' field -->
                        <td>{{ $courseInstructor->instructor->name }}</td>  <!-- Assuming instructor has a 'name' field -->
                        <td>
                            <a href="{{ route('course_instructors.show', $courseInstructor->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('course_instructors.edit', $courseInstructor->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('course_instructors.destroy', $courseInstructor->id) }}" method="POST" style="display:inline;">
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
